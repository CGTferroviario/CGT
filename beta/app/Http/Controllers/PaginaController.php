<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Documento;
use App\Models\Empresa;
use App\Models\Slider;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    function intranet() {
        $sliders = Slider::all();
        return view('intranet', compact('sliders'));
    }
    public function adif() 
    {
        return view('adif');
    }
    public function infraestructura() 
    {
        $documentos = Documento::porEmpresaCategoria('ADIF','INFRAESTRUCTURA')->get();
        return view('adif.infraestructura', compact('documentos'));
    }
    public function circulacion() 
    {
        $documentos = Documento::porEmpresaCategoria('ADIF','CIRCULACIÓN')->get();
        return view('adif.circulacion', compact('documentos'));
    }
    public function oficinasADIF() 
    {
        $documentos = Documento::porEmpresaCategoria('ADIF','OFICINAS')->get();
        return view('adif.oficinas', compact('documentos'));
    }
    public function estaciones() 
    {
        $documentos = Documento::porEmpresaCategoria('ADIF','ESTACIONES')->get();
        return view('adif.estaciones', compact('documentos'));
    }
    // Documentos Generales ADIF
    public function afiliacionADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','AFILIACIÓN')->get();
        return view('adif.doc.afiliacion', compact('documentos'));
    }
    public function ayudasADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','AYUDAS Y BENEFICIOS SOCIALES')->get();
        return view('adif.doc.ayudas', compact('documentos'));
    }
    public function igualdadADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','IGUALDAD')->get();
        return view('adif.doc.igualdad', compact('documentos'));
    }
    public function legislacionADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','LEGISLACIÓN · NORMATIVA LABORAL')->get();
        return view('adif.doc.legislacion', compact('documentos'));
    }
    public function licenciasADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','LICENCIAS')->get();
        return view('adif.doc.licencias', compact('documentos'));
    }
    public function mapaADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','MAPA ESTACIONES')->get();
        return view('adif.doc.mapa', compact('documentos'));
    }
    public function conciliacionADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','MEDIDAS DE CONCILIACIÓN')->get();
        return view('adif.doc.conciliacion', compact('documentos'));
    }
    public function modelosADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','MODELOS DE SOLICITUD DE EMPRESA')->get();
        return view('adif.doc.modelos', compact('documentos'));
    }
    public function protocolosADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','PROTOCOLOS FRENTE A LOS ACOSOS')->get();
        return view('adif.doc.protocolos', compact('documentos'));
    }
    public function saludADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','SALUD LABORAL')->get();
        return view('adif.doc.salud', compact('documentos'));
    }
    public function teletrabajoADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','TELETRABAJO')->get();
        return view('adif.doc.teletrabajo', compact('documentos'));
    }
    public function tablasADIF() {
        $documentos = Documento::porEmpresaEtiqueta('ADIF','TABLAS SALARIALES')->get();
        return view('adif.doc.tablas', compact('documentos'));
    }    
    public function renfe()
    {
        return view('renfe');
    }
    public function comercial() 
    {
        $documentos = Documento::porEmpresaCategoria('RENFE','COMERCIAL')->get();
        return view('renfe.comercial', compact('documentos'));
    }
    public function intervencion() 
    {
        $documentos = Documento::porEmpresaCategoria('RENFE','INTERVENCIÓN')->get();
        return view('renfe.intervencion', compact('documentos'));
    }
    public function conduccion() 
    {
        $documentos = Documento::porEmpresaCategoria('RENFE','CONDUCCIÓN')->get();
        return view('renfe.conduccion', compact('documentos'));
    }
    public function talleres() 
    {
        $documentos = Documento::porEmpresaCategoria('RENFE','TALLERES')->get();
        return view('renfe.talleres', compact('documentos'));
    }
    public function oficinasRENFE() 
    {
        $documentos = Documento::porEmpresaCategoria('RENFE','OFICINAS')->get();
        return view('renfe.oficinas', compact('documentos'));
    }
    // Documentos Generales RENFE
    public function afiliacionRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','AFILIACIÓN')->get();
        return view('renfe.doc.afiliacion', compact('documentos'));
    }
    public function ayudasRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','AYUDAS Y BENEFICIOS SOCIALES')->get();
        return view('renfe.doc.ayudas', compact('documentos'));
    }
    public function igualdadRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','IGUALDAD')->get();
        return view('renfe.doc.igualdad', compact('documentos'));
    }
    public function legislacionRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','LEGISLACIÓN · NORMATIVA LABORAL')->get();
        return view('renfe.doc.legislacion', compact('documentos'));
    }
    public function licenciasRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','LICENCIAS')->get();
        return view('renfe.doc.licencias', compact('documentos'));
    }
    public function mapaRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','MAPA ESTACIONES')->get();
        return view('renfe.doc.mapa', compact('documentos'));
    }
    public function conciliacionRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','MEDIDAS DE CONCILIACIÓN')->get();
        return view('renfe.doc.conciliacion', compact('documentos'));
    }
    public function modelosRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','MODELOS DE SOLICITUD DE EMPRESA')->get();
        return view('renfe.doc.modelos', compact('documentos'));
    }
    public function protocolosRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','PROTOCOLOS FRENTE A LOS ACOSOS')->get();
        return view('renfe.doc.protocolos', compact('documentos'));
    }
    public function saludRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','SALUD LABORAL')->get();
        return view('renfe.doc.salud', compact('documentos'));
    }
    public function teletrabajoRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','TELETRABAJO')->get();
        return view('renfe.doc.teletrabajo', compact('documentos'));
    }
    public function tablasRENFE() {
        $documentos = Documento::porEmpresaEtiqueta('RENFE','TABLAS SALARIALES')->get();
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
        $documentos = Documento::porCategoriaEtiqueta('JURIDICA', 'CONVENIOS COLECTIVOS')->get();
        return view('juridica.convenios', compact('documentos'));
    }
    public function laboral() 
    {
        $documentos = Documento::porCategoriaEtiqueta('JURIDICA', 'LEGISLACIÓN LABORAL')->get();
        return view('juridica.laboral', compact('documentos'));
    }
    public function ferroviaria() 
    {
        $documentos = Documento::porCategoriaEtiqueta('JURIDICA', 'LEGISLACIÓN FERROVIARIA')->get();
        return view('juridica.ferroviaria', compact('documentos'));
    }
    public function modelos() 
    {
        $documentos = Documento::porCategoriaEtiqueta('JURIDICA', 'FORMULARIOS // MODELOS')->get();
        return view('juridica.modelos', compact('documentos'));
    }
    public function logros() 
    {
        $documentos = Documento::porCategoriaEtiqueta('JURIDICA', 'LOGROS JURÍDICOS CGT')->get();
        return view('juridica.logros', compact('documentos'));
    }
    public function biblioteca() 
    {
        return view('biblioteca');
    }
    public function seguridad() 
    {
        $documentos = Documento::porCategoriaEtiqueta('BIBLIOTECA', 'SEGURIDAD EN LA CIRCULACIÓN')->get();
        return view('biblioteca.seguridad', compact('documentos'));
    }
    public function archivo() 
    {
        $documentos = Documento::porCategoriaEtiqueta('BIBLIOTECA', 'ARCHIVO HISTÓRICO')->get();
        return view('biblioteca.archivo', compact('documentos'));
    }
    public function defensa() 
    {
        $documentos = Documento::porCategoriaEtiqueta('BIBLIOTECA', 'DEFENSA DEL FERROCARRIL')->get();
        return view('biblioteca.defensa', compact('documentos'));
    }
    public function colegio() 
    {
        $documentos = Documento::porCategoriaEtiqueta('BIBLIOTECA', 'COLEGIO DE HUÉRFANOS')->get();
        return view('biblioteca.colegio', compact('documentos'));
    }
    public function via() 
    {
        $documentos = Documento::porCategoriaEtiqueta('BIBLIOTECA', 'VIA LIBERTARIA')->get();
        return view('biblioteca.via', compact('documentos'));
    }
    public function equipo()
    {
        return view('equipo');
    }
}
