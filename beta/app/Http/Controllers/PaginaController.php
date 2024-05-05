<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Documento;
use App\Models\Empresa;
use App\Models\Etiqueta;
use App\Models\Slider;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    function intranet() {
        $sliders = Slider::all();
        return view('intranet', compact('sliders'));
    }
    public function docADIF() 
    {
        return view('adif.doc');
    }
    public function infraestructura()
    {
        $documentos = Documento::porEmpresaCategoria('ADIF','INFRAESTRUCTURA')->orderBy('fecha', 'desc')->paginate(12);
        return view('adif.infraestructura', compact('documentos'));
    }
    public function circulacion() 
    {
        $documentos = Documento::porEmpresaCategoria('ADIF','CIRCULACIÓN')->orderBy('fecha', 'desc')->paginate(12);
        return view('adif.circulacion', compact('documentos'));
    }
    public function oficinasADIF() 
    {
        $documentos = Documento::porEmpresaCategoria('ADIF','OFICINAS')->orderBy('fecha', 'desc')->paginate(12);
        return view('adif.oficinas', compact('documentos'));
    }
    public function estaciones() 
    {
        $documentos = Documento::porEmpresaCategoria('ADIF','ESTACIONES')->orderBy('fecha', 'desc')->paginate(12);
        return view('adif.estaciones', compact('documentos'));
    }
    // Documentos Generales ADIF
    public function afiliacionADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','AFILIACIÓN')->orderBy('fecha', 'desc')->paginate(12);
        return view('adif.doc.afiliacion', compact('documentos'));
    }
    public function ayudasADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','AYUDAS Y BENEFICIOS SOCIALES')->orderBy('fecha', 'desc')->paginate(12);
        return view('adif.doc.ayudas', compact('documentos'));
    }
    public function igualdadADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','IGUALDAD')->orderBy('fecha', 'desc')->paginate(12);
        return view('adif.doc.igualdad', compact('documentos'));
    }
    public function legislacionADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','LEGISLACIÓN · NORMATIVA LABORAL')->orderBy('fecha', 'desc')->paginate(12);
        return view('adif.doc.legislacion', compact('documentos'));
    }
    public function licenciasADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','LICENCIAS')->orderBy('fecha', 'desc')->paginate(12);
        return view('adif.doc.licencias', compact('documentos'));
    }
    public function mapaADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','MAPA ESTACIONES')->orderBy('fecha', 'desc')->paginate(12);
        return view('adif.doc.mapa', compact('documentos'));
    }
    public function conciliacionADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','MEDIDAS DE CONCILIACIÓN')->orderBy('fecha', 'desc')->paginate(12);
        return view('adif.doc.conciliacion', compact('documentos'));
    }
    public function modelosADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','MODELOS DE SOLICITUD DE EMPRESA')->orderBy('fecha', 'desc')->paginate(12);
        return view('adif.doc.modelos', compact('documentos'));
    }
    public function protocolosADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','PROTOCOLOS FRENTE A LOS ACOSOS')->orderBy('fecha', 'desc')->paginate(12);
        return view('adif.doc.protocolos', compact('documentos'));
    }
    public function saludADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','SALUD LABORAL')->orderBy('fecha', 'desc')->paginate(12);
        return view('adif.doc.salud', compact('documentos'));
    }
    public function teletrabajoADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','TELETRABAJO')->orderBy('fecha', 'desc')->paginate(12);
        return view('adif.doc.teletrabajo', compact('documentos'));
    }
    public function tablasADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','TABLAS SALARIALES')->orderBy('fecha', 'desc')->paginate(12);
        return view('adif.doc.tablas', compact('documentos'));
    }    
    public function docRENFE() 
    {
        return view('renfe.doc');
    }
    public function comercial() 
    {
        $documentos = Documento::porEmpresaCategoria('RENFE','COMERCIAL')->orderBy('fecha', 'desc')->paginate(12);
        $empresas = Empresa::whereHas('documentos')->get();
        $categorias = Categoria::whereHas('documentos')->get();
        $etiquetas = Etiqueta::whereHas('documentos')->get();
        return view('renfe.comercial', compact('documentos', 'empresas', 'categorias', 'etiquetas'));
    }
    public function intervencion() 
    {
        $documentos = Documento::porEmpresaCategoria('RENFE','INTERVENCIÓN')->orderBy('fecha', 'desc')->paginate(12);
        $empresas = Empresa::whereHas('documentos')->get();
        $categorias = Categoria::whereHas('documentos')->get();
        $etiquetas = Etiqueta::whereHas('documentos')->get();
        // dd($empresas);
        return view('renfe.intervencion', compact('documentos', 'empresas', 'categorias', 'etiquetas'));
    }
    public function conduccion() 
    {
        $documentos = Documento::porEmpresaCategoria('RENFE','CONDUCCIÓN')->orderBy('fecha', 'desc')->paginate(12);
        $empresas = Empresa::whereHas('documentos')->get();
        $categorias = Categoria::whereHas('documentos')->get();
        $etiquetas = Etiqueta::whereHas('documentos')->get();
        return view('renfe.conduccion', compact('documentos', 'empresas', 'categorias', 'etiquetas'));
    }
    public function talleres() 
    {
        $documentos = Documento::porEmpresaCategoria('RENFE','TALLERES')->orderBy('fecha', 'desc')->paginate(12);
        $empresas = Empresa::whereHas('documentos')->get();
        $categorias = Categoria::whereHas('documentos')->get();
        $etiquetas = Etiqueta::whereHas('documentos')->get();
        return view('renfe.talleres', compact('documentos', 'empresas', 'categorias', 'etiquetas'));
    }
    public function oficinasRENFE() 
    {
        $documentos = Documento::porEmpresaCategoria('RENFE','OFICINAS')->orderBy('fecha', 'desc')->paginate(12);
        $empresas = Empresa::whereHas('documentos')->get();
        $categorias = Categoria::whereHas('documentos')->get();
        $etiquetas = Etiqueta::whereHas('documentos')->get();
        return view('renfe.oficinas', compact('documentos', 'empresas', 'categorias', 'etiquetas'));
    }
    // Documentos Generales RENFE
    public function afiliacionRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','AFILIACIÓN')->orderBy('fecha', 'desc')->paginate(12);
        return view('renfe.doc.afiliacion', compact('documentos'));
    }
    public function ayudasRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','AYUDAS Y BENEFICIOS SOCIALES')->orderBy('fecha', 'desc')->paginate(12);
        return view('renfe.doc.ayudas', compact('documentos'));
    }
    public function igualdadRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','IGUALDAD')->orderBy('fecha', 'desc')->paginate(12);
        return view('renfe.doc.igualdad', compact('documentos'));
    }
    public function legislacionRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','LEGISLACIÓN · NORMATIVA LABORAL')->orderBy('fecha', 'desc')->paginate(12);
        return view('renfe.doc.legislacion', compact('documentos'));
    }
    public function licenciasRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','LICENCIAS')->orderBy('fecha', 'desc')->paginate(12);
        return view('renfe.doc.licencias', compact('documentos'));
    }
    public function mapaRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','MAPA ESTACIONES')->orderBy('fecha', 'desc')->paginate(12);
        return view('renfe.doc.mapa', compact('documentos'));
    }
    public function conciliacionRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','MEDIDAS DE CONCILIACIÓN')->orderBy('fecha', 'desc')->paginate(12);
        return view('renfe.doc.conciliacion', compact('documentos'));
    }
    public function modelosRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','MODELOS DE SOLICITUD DE EMPRESA')->orderBy('fecha', 'desc')->paginate(12);
        return view('renfe.doc.modelos', compact('documentos'));
    }
    public function protocolosRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','PROTOCOLOS FRENTE A LOS ACOSOS')->orderBy('fecha', 'desc')->paginate(12);
        return view('renfe.doc.protocolos', compact('documentos'));
    }
    public function saludRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','SALUD LABORAL')->orderBy('fecha', 'desc')->paginate(12);
        return view('renfe.doc.salud', compact('documentos'));
    }
    public function teletrabajoRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','TELETRABAJO')->orderBy('fecha', 'desc')->paginate(12);
        return view('renfe.doc.teletrabajo', compact('documentos'));
    }
    public function tablasRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','TABLAS SALARIALES')->orderBy('fecha', 'desc')->paginate(12);
        return view('renfe.doc.tablas', compact('documentos'));
    }
    public function empresasaux()
    {
        return view('empresasaux');
    }
    public function serveo() {
        $documentos = Documento::where('empresa_id', 3)->orderBy('fecha', 'desc')->paginate(12);
        return view('empresasaux.serveo', compact('documentos'));
    }
    public function logirail() {
        $documentos = Documento::where('empresa_id', 4)->orderBy('fecha', 'desc')->paginate(12);
        return view('empresasaux.logirail', compact('documentos'));
    }
    public function otras() {
        $documentos = Documento::where('empresa_id', 5)->orderBy('fecha', 'desc')->paginate(12);
        return view('empresasaux.otras', compact('documentos'));
    }
    public function juridica() 
    {
        return view('juridica');
    }
    public function convenios() 
    {
        $documentos = Documento::porCategoriaEtiqueta('JURIDICA', 'CONVENIOS COLECTIVOS')->orderBy('fecha', 'desc')->paginate(12);
        return view('juridica.convenios', compact('documentos'));
    }
    public function laboral() 
    {
        $documentos = Documento::porCategoriaEtiqueta('JURIDICA', 'LEGISLACIÓN LABORAL')->orderBy('fecha', 'desc')->paginate(12);
        return view('juridica.laboral', compact('documentos'));
    }
    public function ferroviaria() 
    {
        $documentos = Documento::porCategoriaEtiqueta('JURIDICA', 'LEGISLACIÓN FERROVIARIA')->orderBy('fecha', 'desc')->paginate(12);
        return view('juridica.ferroviaria', compact('documentos'));
    }
    public function modelos() 
    {
        $documentos = Documento::porCategoriaEtiqueta('JURIDICA', 'FORMULARIOS // MODELOS')->orderBy('fecha', 'desc')->paginate(12);
        return view('juridica.modelos', compact('documentos'));
    }
    public function logros() 
    {
        $documentos = Documento::porCategoriaEtiqueta('JURIDICA', 'LOGROS JURÍDICOS CGT')->orderBy('fecha', 'desc')->paginate(12);
        return view('juridica.logros', compact('documentos'));
    }
    public function biblioteca() 
    {
        return view('biblioteca');
    }
    public function seguridad() 
    {
        $documentos = Documento::porCategoriaEtiqueta('BIBLIOTECA', 'SEGURIDAD EN LA CIRCULACIÓN')->orderBy('fecha', 'desc')->paginate(12);
        return view('biblioteca.seguridad', compact('documentos'));
    }
    public function archivo() 
    {
        $documentos = Documento::porCategoriaEtiqueta('BIBLIOTECA', 'ARCHIVO HISTÓRICO')->orderBy('fecha', 'desc')->paginate(12);
        return view('biblioteca.archivo', compact('documentos'));
    }
    public function defensa() 
    {
        $documentos = Documento::porCategoriaEtiqueta('BIBLIOTECA', 'DEFENSA DEL FERROCARRIL')->orderBy('fecha', 'desc')->paginate(12);
        return view('biblioteca.defensa', compact('documentos'));
    }
    public function colegio() 
    {
        $documentos = Documento::porCategoriaEtiqueta('BIBLIOTECA', 'COLEGIO DE HUÉRFANOS')->orderBy('fecha', 'desc')->paginate(12);
        return view('biblioteca.colegio', compact('documentos'));
    }
    public function via() 
    {
        $documentos = Documento::porCategoriaEtiqueta('BIBLIOTECA', 'VIA LIBERTARIA')->orderBy('fecha', 'desc')->paginate(12);
        return view('biblioteca.via', compact('documentos'));
    }
    public function equipo()
    {
        return view('equipo');
    }
}
