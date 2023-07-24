<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Documento;
use App\Models\Empresa;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function adif() 
    {
        return view('adif');
    }
    public function infraestructura() 
    {
        // $documentos = Documento::withWhereHas('documentos', function ($query) {
        //     $query->where('empresa', 'ADIF');
        // })->get();

        $posts = Documento::whereHas('categoria', function (Builder $query) {
            $query->where('nombre',  'INFRAESTRUCTURA');
        })->get();
        dd($posts);
        //$empresa = Empresa::
        $documentos = Documento::where('empresa_id', 1)->where('categoria_id', 1)->get();
        return view('adif.infraestructura', compact('documentos'));
    }
    public function circulacion() 
    {
        $documentos = Documento::where('empresa_id', 1)->where('categoria_id', 2)->get();
        return view('adif.circulacion', compact('documentos'));
    }
    public function oficinasADIF() 
    {
        $documentos = Documento::where('empresa_id', 1)->where('categoria_id', 3)->get();
        return view('adif.oficinas', compact('documentos'));
    }
    // Documentos Generales ADIF
    public function afiliacionADIF() {
        $documentos = Documento::where('empresa_id', 1)->where('etiqueta_id', 1)->get();
        return view('adif.doc.afiliacion', compact('documentos'));
    }
    public function ayudasADIF() {
        $documentos = Documento::where('empresa_id', 1)->where('etiqueta_id', 2)->get();
        return view('adif.doc.ayudas', compact('documentos'));
    }
    public function igualdadADIF() {
        $documentos = Documento::where('empresa_id', 1)->where('etiqueta_id', 3)->get();
        return view('adif.doc.igualdad', compact('documentos'));
    }
    public function legislacionADIF() {
        $documentos = Documento::where('empresa_id', 1)->where('etiqueta_id', 4)->get();
        return view('adif.doc.legislacion', compact('documentos'));
    }
    public function licenciasADIF() {
        $documentos = Documento::where('empresa_id', 1)->where('etiqueta_id', 5)->get();
        return view('adif.doc.licencias', compact('documentos'));
    }
    public function mapaADIF() {
        $documentos = Documento::where('empresa_id', 1)->where('etiqueta_id', 6)->get();
        return view('adif.doc.mapa', compact('documentos'));
    }
    public function conciliacionADIF() {
        $documentos = Documento::where('empresa_id', 1)->where('etiqueta_id', 7)->get();
        return view('adif.doc.conciliacion', compact('documentos'));
    }
    public function modelosADIF() {
        $documentos = Documento::where('empresa_id', 1)->where('etiqueta_id', 8)->get();
        return view('adif.doc.modelos', compact('documentos'));
    }
    public function protocolosADIF() {
        $documentos = Documento::where('empresa_id', 1)->where('etiqueta_id', 9)->get();
        return view('adif.doc.protocolos', compact('documentos'));
    }
    public function saludADIF() {
        $documentos = Documento::where('empresa_id', 1)->where('etiqueta_id', 10)->get();
        return view('adif.doc.salud', compact('documentos'));
    }
    public function teletrabajoADIF() {
        $documentos = Documento::where('empresa_id', 1)->where('etiqueta_id', 11)->get();
        return view('adif.doc.teletrabajo', compact('documentos'));
    }
    public function tablasADIF() {
        $documentos = Documento::where('empresa_id', 1)->where('etiqueta_id', 12)->get();
        return view('adif.doc.tablas', compact('documentos'));
    }    
    public function renfe()
    {
        return view('renfe');
    }
    public function comercial() 
    {
        $documentos = Documento::where('empresa_id', 2)->where('categoria_id', 4)->get();
        return view('renfe.comercial', compact('documentos'));
    }
    public function intervencion() 
    {
        $documentos = Documento::where('empresa_id', 2)->where('categoria_id', 5)->get();
        return view('renfe.intervencion', compact('documentos'));
    }
    public function conduccion() 
    {
        $documentos = Documento::where('empresa_id', 2)->where('categoria_id', 6)->get();
        return view('renfe.conduccion', compact('documentos'));
    }
    public function talleres() 
    {
        $documentos = Documento::where('empresa_id', 2)->where('categoria_id', 7)->get();
        return view('renfe.talleres', compact('documentos'));
    }
    public function oficinasRENFE() 
    {
        $documentos = Documento::where('empresa_id', 2)->where('categoria_id', 3)->get();
        return view('renfe.oficinas', compact('documentos'));
    }
    // Documentos Generales RENFE
    public function afiliacionRENFE() {
        $documentos = Documento::where('empresa_id', 2)->where('etiqueta_id', 1)->get();
        return view('renfe.doc.afiliacion', compact('documentos'));
    }
    public function ayudasRENFE() {
        $documentos = Documento::where('empresa_id', 2)->where('etiqueta_id', 2)->get();
        return view('renfe.doc.ayudas', compact('documentos'));
    }
    public function igualdadRENFE() {
        $documentos = Documento::where('empresa_id', 2)->where('etiqueta_id', 3)->get();
        return view('renfe.doc.igualdad', compact('documentos'));
    }
    public function legislacionRENFE() {
        $documentos = Documento::where('empresa_id', 2)->where('etiqueta_id', 4)->get();
        return view('renfe.doc.legislacion', compact('documentos'));
    }
    public function licenciasRENFE() {
        $documentos = Documento::where('empresa_id', 2)->where('etiqueta_id', 5)->get();
        return view('renfe.doc.licencias', compact('documentos'));
    }
    public function mapaRENFE() {
        $documentos = Documento::where('empresa_id', 2)->where('etiqueta_id', 6)->get();
        return view('renfe.doc.mapa', compact('documentos'));
    }
    public function conciliacionRENFE() {
        $documentos = Documento::where('empresa_id', 2)->where('etiqueta_id', 7)->get();
        return view('renfe.doc.conciliacion', compact('documentos'));
    }
    public function modelosRENFE() {
        $documentos = Documento::where('empresa_id', 2)->where('etiqueta_id', 8)->get();
        return view('renfe.doc.modelos', compact('documentos'));
    }
    public function protocolosRENFE() {
        $documentos = Documento::where('empresa_id', 2)->where('etiqueta_id', 9)->get();
        return view('renfe.doc.protocolos', compact('documentos'));
    }
    public function saludRENFE() {
        $documentos = Documento::where('empresa_id', 2)->where('etiqueta_id', 10)->get();
        return view('renfe.doc.salud', compact('documentos'));
    }
    public function teletrabajoRENFE() {
        $documentos = Documento::where('empresa_id', 2)->where('etiqueta_id', 11)->get();
        return view('renfe.doc.teletrabajo', compact('documentos'));
    }
    public function tablasRENFE() {
        $documentos = Documento::where('empresa_id', 2)->where('etiqueta_id', 12)->get();
        return view('renfe.doc.tablas', compact('documentos'));
    }
    public function empresasaux()
    {
        return view('empresasaux');
    }
    public function serveo() {
        $documentos = Documento::where('empresa_id', 3)->get();
        return view('empresasaux.serveo', compact('documentos'));
    }
    public function logirail() {
        $documentos = Documento::where('empresa_id', 4)->get();
        return view('empresasaux.logirail', compact('documentos'));
    }
    public function otras() {
        $documentos = Documento::where('empresa_id', 5)->get();
        return view('empresasaux.otras', compact('documentos'));
    }
    public function juridica() 
    {
        return view('juridica');
    }
    public function convenios() 
    {
        $documentos = Documento::where('categoria_id', 8)->where('etiqueta_id', 13)->get();
        return view('juridica.convenios', compact('documentos'));
    }
    public function laboral() 
    {
        $documentos = Documento::where('categoria_id', 8)->where('etiqueta_id', 14)->get();
        return view('juridica.laboral', compact('documentos'));
    }
    public function ferroviaria() 
    {
        $documentos = Documento::where('categoria_id', 8)->where('etiqueta_id', 15)->get();
        return view('juridica.ferroviaria', compact('documentos'));
    }
    public function modelos() 
    {
        $documentos = Documento::where('categoria_id', 8)->where('etiqueta_id', 16)->get();
        return view('juridica.modelos', compact('documentos'));
    }
    public function logros() 
    {
        $documentos = Documento::where('categoria_id', 8)->where('etiqueta_id', 17)->get();
        return view('juridica.logros', compact('documentos'));
    }
    public function biblioteca() 
    {
        return view('biblioteca');
    }
    public function seguridad() 
    {
        $documentos = Documento::where('categoria_id', 9)->where('etiqueta_id', 18)->get();
        return view('biblioteca.seguridad', compact('documentos'));
    }
    public function archivo() 
    {
        $documentos = Documento::where('categoria_id', 9)->where('etiqueta_id', 19)->get();
        return view('biblioteca.archivo', compact('documentos'));
    }
    public function defensa() 
    {
        $documentos = Documento::where('categoria_id', 9)->where('etiqueta_id', 20)->get();
        return view('biblioteca.defensa', compact('documentos'));
    }
    public function colegio() 
    {
        $documentos = Documento::where('categoria_id', 9)->where('etiqueta_id', 21)->get();
        return view('biblioteca.colegio', compact('documentos'));
    }
    public function via() 
    {
        $documentos = Documento::where('categoria_id', 9)->where('etiqueta_id', 22)->get();
        return view('biblioteca.via', compact('documentos'));
    }
    public function equipo()
    {
        return view('equipo');
    }
}
