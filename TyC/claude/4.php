Se me ha olvidado mencionar que sector está relacionado con empresas, una empresa pertenece a un sector y un sector está compuesto de multiples empresas

Vamos a modificar los modelos para reflejar esta relación. Necesitaremos actualizar la migración y los modelos de Sector y Empresa.

Sector and Empresa Relationship Models
Click to open code
Cambios principales:

Migración de Empresas:
Añadido sector_id como clave foránea a la tabla de empresas
Modelo Sector:
Añadida relación empresas()
Métodos accesorios para contar empresas y afiliados
Modelo Empresa:
Añadida relación sector()
Método accesorio para contar afiliados
Controladores:
SectorController con lógica para gestionar sectores
EmpresaController con lógica para gestionar empresas
Ambos controladores incluyen:
Filtrado
Paginación
Validaciones
Prevención de eliminación con registros asociados
Pasos a seguir:

Ejecutar migración para añadir sector_id a la tabla de empresas
Crear las vistas correspondientes
Actualizar los formularios de creación/edición de empresas para incluir selector de sector
Preguntas para ti:

¿Quieres que te muestre cómo actualizar la migración existente?
¿Necesitas que genere los comandos para migrar la base de datos?
¿Te gustaría ver algún ejemplo de cómo se integraría esta relación en los formularios?

<?php
// database/migrations/XXXX_XX_XX_create_empresas_table.php (actualizar migración)
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('cif')->unique();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->foreignId('sector_id')->nullable()->constrained('sectores');
            $table->timestamps();
        });
    }
}

// app/Models/Sector.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sector extends Model
{
    protected $table = 'sectores';
    
    protected $fillable = ['nombre', 'descripcion'];

    public function empresas(): HasMany
    {
        return $this->hasMany(Empresa::class);
    }

    public function afiliados(): HasMany
    {
        return $this->hasMany(Afiliado::class);
    }

    // Método para obtener el número de empresas en el sector
    public function getNumeroEmpresasAttribute(): int
    {
        return $this->empresas()->count();
    }

    // Método para obtener el número de afiliados en el sector
    public function getNumeroAfiliadosAttribute(): int
    {
        return $this->afiliados()->count();
    }
}

// app/Models/Empresa.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empresa extends Model
{
    protected $fillable = [
        'nombre', 
        'cif', 
        'direccion', 
        'telefono', 
        'sector_id'
    ];

    public function sector(): BelongsTo
    {
        return $this->belongsTo(Sector::class);
    }

    public function afiliados(): HasMany
    {
        return $this->hasMany(Afiliado::class);
    }

    // Método para obtener el número de afiliados en la empresa
    public function getNumeroAfiliadosAttribute(): int
    {
        return $this->afiliados()->count();
    }
}

// app/Http/Controllers/SectorController.php
namespace App\Http\Controllers;

use App\Models\Sector;
use App\Models\Empresa;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    public function index()
    {
        $sectores = Sector::withCount(['empresas', 'afiliados'])
            ->orderBy('nombre')
            ->paginate(15);

        return view('sectores.index', compact('sectores'));
    }

    public function create()
    {
        return view('sectores.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255|unique:sectores',
            'descripcion' => 'nullable|string'
        ]);

        $sector = Sector::create($validated);

        return redirect()
            ->route('sectores.show', $sector)
            ->with('success', 'Sector creado correctamente.');
    }

    public function show(Sector $sector)
    {
        $empresas = $sector->empresas()->paginate(10);
        
        return view('sectores.show', [
            'sector' => $sector,
            'empresas' => $empresas
        ]);
    }

    public function edit(Sector $sector)
    {
        return view('sectores.edit', compact('sector'));
    }

    public function update(Request $request, Sector $sector)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255|unique:sectores,nombre,' . $sector->id,
            'descripcion' => 'nullable|string'
        ]);

        $sector->update($validated);

        return redirect()
            ->route('sectores.show', $sector)
            ->with('success', 'Sector actualizado correctamente.');
    }

    public function destroy(Sector $sector)
    {
        if ($sector->empresas()->exists()) {
            return back()->with('error', 'No se puede eliminar el sector porque tiene empresas asociadas.');
        }

        $sector->delete();

        return redirect()
            ->route('sectores.index')
            ->with('success', 'Sector eliminado correctamente.');
    }
}

// app/Http/Controllers/EmpresaController.php
namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Sector;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index(Request $request)
    {
        $query = Empresa::with('sector');

        if ($request->filled('sector_id')) {
            $query->where('sector_id', $request->sector_id);
        }

        $empresas = $query->orderBy('nombre')
            ->paginate(15)
            ->withQueryString();

        $sectores = Sector::pluck('nombre', 'id');

        return view('empresas.index', [
            'empresas' => $empresas,
            'sectores' => $sectores
        ]);
    }

    public function create()
    {
        $sectores = Sector::pluck('nombre', 'id');
        return view('empresas.create', compact('sectores'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'cif' => 'required|string|max:20|unique:empresas',
            'direccion' => 'nullable|string|max:255',
            'telefono' => 'nullable|string|max:20',
            'sector_id' => 'nullable|exists:sectores,id'
        ]);

        $empresa = Empresa::create($validated);

        return redirect()
            ->route('empresas.show', $empresa)
            ->with('success', 'Empresa creada correctamente.');
    }

    public function show(Empresa $empresa)
    {
        $empresa->load('sector');
        $afiliados = $empresa->afiliados()->paginate(10);

        return view('empresas.show', [
            'empresa' => $empresa,
            'afiliados' => $afiliados
        ]);
    }

    public function edit(Empresa $empresa)
    {
        $sectores = Sector::pluck('nombre', 'id');
        return view('empresas.edit', [
            'empresa' => $empresa,
            'sectores' => $sectores
        ]);
    }

    public function update(Request $request, Empresa $empresa)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'cif' => 'required|string|max:20|unique:empresas,cif,' . $empresa->id,
            'direccion' => 'nullable|string|max:255',
            'telefono' => 'nullable|string|max:20',
            'sector_id' => 'nullable|exists:sectores,id'
        ]);

        $empresa->update($validated);

        return redirect()
            ->route('empresas.show', $empresa)
            ->with('success', 'Empresa actualizada correctamente.');
    }

    public function destroy(Empresa $empresa)
    {
        if ($empresa->afiliados()->exists()) {
            return back()->with('error', 'No se puede eliminar la empresa porque tiene afiliados asociados.');
        }

        $empresa->delete();

        return redirect()
            ->route('empresas.index')
            ->with('success', 'Empresa eliminada correctamente.');
    }
}
