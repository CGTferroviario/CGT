<h1>This is index Blog</h1>

{{-- @forelse ($posts as $post)
    {{ $loop->depth }}
@empty
    <p>No posts have been set</p>
@endforelse --}}




{{-- @if (count($posts) < 75)
    <h1>{{ dd($posts) }} </h1>
@elseif (count($posts) === 100)
    <h1>Son 100</h1>
@else
    <h1>No posts</h1>
@endif --}}
{{-- {{ $posts->title }} --}}

<a href={{ route('blog.show', ['id' => 1]) }}>Blog</a>