<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostFormRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Operaciones básicas de Query Builder
        // $posts = DB::select('SELECT * FROM posts WHERE id = :id', ['id' => 1]);
        // $posts = DB::insert('INSERT INTO posts (title, excerpt, body, image_path, is_published, min_to_read) VALUES (?, ?, ?, ?, ?, ?)', [
        //     'Test', 'Test', 'Test', 'Test', true, 1]);
        // $posts = DB::update('UPDATE posts SET body = ? WHERE id = ?', ['Body Update example', 103]);
        // $posts = DB:: delete('DELETE FROM posts WHERE id = ?', [103]);
        // $posts = Post::orderBy('id', 'desc')->take(10)->get();
        // $posts = Post::where('min_to_read', 2)->get();
        // dd($posts);
        // Post::chunk(25, function ($posts) {
        //     foreach($posts as $post) {
        //         echo $post->title. '<br>';
        //     }
        // });
        // $posts = Post::get()->count();

        // $posts = Post::avg('min_to_read');

        // $posts = Post::orderBy('updated_at', 'desc')->get();

        // dd($posts);

        // Recuperar todos los posts orden descendente por fecha
        // return view('blog.index', [
        //     'posts' => Post::orderBy('updated_at', 'desc')->get()
        // ]);

        return view('blog.index', [
            'posts' => Post::orderBy('updated_at', 'desc')->paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostFormRequest $request)
    {
        // Esto es PHP Orientado a Objetos
        // $post = new Post();
        // $post->title = $request->title;
        // $post->excerpt = $request->excerpt;
        // $post->body = $request->body;
        // $post->image_path = 'temporary';
        // $post->is_published = $request->is_published === 'on';
        // $post->min_to_read = $request->min_to_read;
        // $post->save();

        $request->validated();

        // Esto es usando Eloquent
        $post = Post::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'image_path' => $this->storeImage($request),
            'is_published' => $request->is_published === 'on',
            'min_to_read' => $request->min_to_read
        ]);

        $post->meta()->create([
            'post_id' => $post->id,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'meta_robots' => $request->meta_robots
        ]);

        return redirect(route('blog.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('blog.show', [
            'post' => Post::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('blog.edit', [
            'post' => Post::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostFormRequest $request, $id)
    {
        $request->validated();

        Post::where('id', $id)->update($request->except([
            '_token', '_method'
        ]));
        
        return redirect(route('blog.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);

        return redirect(route('blog.index'))->with('message', 'Post has been deleted');
    }
    private function storeImage($request)
    {
        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        return $request->image->move(public_path('images'), $newImageName);
    }
}
