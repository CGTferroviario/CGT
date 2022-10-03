@extends('layouts.master')

@section('content')
<div class="jumbotron jumbotron-fluid fondo">
   <div class="container">
      <div class="row py-lg-5">
         <div class="col-lg-6 col-md-8 mx-auto centrado">
            <a href="http://cgtferroviario.es" target="blank"><img src="img/logo_med.png"></a>
            <a href="https://cgt.org.es/" target="blank"><img src="img/logoCGT_med.png"></a>
            <h1 class="titulo">Documentación ADIF <br> SFFCGT</h1>
         </div>
      </div>
   </div>
</div>
<main class="bg-oscuro">
    
   <x-adif.sidebar />
   
   <div class="py-4">
     <div class="container">
       <div class="accordion-flush" id="#accordionDoc">
         <div class="accordion-item">
           <h2 class="accordion-header">
             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAfiliacion" aria-expanded="false" aria-controls="collapseAfiliacion">
               <span class="encabezadoAcordeon" id="Afiliacion">Afiliación</span>
             </button>
           </h2>
           <div id="collapseAfiliacion" class="accordion-collapse collapse" aria-labelledby="headingAfiliacion" data-bs-parent="#accordionDoc">
             <div class="accordion-body">
               <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6 g-5">
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Modelo para Afiliarse por Nómina</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" target="_blank" download="CGT_Afiliacion_Nomina" class="btn"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Modelo para Afiliarse por Banco<br></p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/AFILIACION/FICHA_AFILIACION_BANCO.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/AFILIACION/FICHA_AFILIACION_BANCO.pdf" target="_blank" download="CGT_Afiliacion_Banco.pdf" class="btn"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Modelo para Solicitar la Baja</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/AFILIACION/FICHA_BAJA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/AFILIACION/FICHA_BAJA.pdf" target="_blank" download="CGT_Baja_Afiliacion" class="btn"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="accordion-item">
           <h2 class="accordion-header">
             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAyudas" aria-expanded="false" aria-controls="collapseAyudas">
               <span class="encabezadoAcordeon" id="Ayudas">Ayudas y Beneficios Sociales</span>
             </button>
           </h2>
           <div id="collapseAyudas" class="accordion-collapse collapse" aria-labelledby="headingAyudas" data-bs-parent="#accordionDoc">
             <div class="accordion-body">
               <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6 g-5">
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Beneficios Sociales</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/AYUDAS Y BENEFICIOS SOCIALES/BENEFICIOS SOCIALES.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/AYUDAS Y BENEFICIOS SOCIALES/BENEFICIOS SOCIALES.pdf" class="btn" target="_blank" download="CGT_BeneficiosSociales.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">COM. 05/22 Ayudas Graciables</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/AYUDAS Y BENEFICIOS SOCIALES/COM 05. ADIF. AYUDAS GRACIABLES.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/AYUDAS Y BENEFICIOS SOCIALES/COM 05. ADIF. AYUDAS GRACIABLES.pdf" class="btn" target="_blank" download="CGT_COM 05 - Ayudas Graciables.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Requisitos Ayudas Graciables</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/AYUDAS Y BENEFICIOS SOCIALES/REQUISITOS_AYUDAS_GRACIABLES.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/AYUDAS Y BENEFICIOS SOCIALES/REQUISITOS_AYUDAS_GRACIABLES.pdf" class="btn" target="_blank" download="CGT_Requisitos_Ayudas_Graciables.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                     
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Solicitud Ayuda Graciable</p>
                     </div>
                     <div class="d-flex justify-content-between align-items-center">
                       <div class="card-footer btn-group">
                         <a href="doc/AYUDAS Y BENEFICIOS SOCIALES/SOLICITUD AYUDA GRACIABLE.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/AYUDAS Y BENEFICIOS SOCIALES/SOLICITUD AYUDA GRACIABLE.pdf" class="btn" target="_blank" download="CGT_Solicitud_Ayuda_Graciable.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Solicitud Ayuda por Incapacidad Temporal</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/AYUDAS Y BENEFICIOS SOCIALES/SOLICITUD AYUDA POR INCAPACIDAD TEMPORAL.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/AYUDAS Y BENEFICIOS SOCIALES/SOLICITUD AYUDA POR INCAPACIDAD TEMPORAL.pdf" target="_blank" download="CGT_Solicitud_Ayuda_Incapacidad_Temporal.pdf" class="btn"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Solicitud Cambio de Residencia</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/AYUDAS Y BENEFICIOS SOCIALES/SOLICITUD CAMBIO DE RESIDENCIA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/AYUDAS Y BENEFICIOS SOCIALES/SOLICITUD CAMBIO DE RESIDENCIA.pdf" target="_blank" download="CGT_Solicitud_Cambio_Residencia.pdf" class="btn"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Solicitud Indemnización Seguro de Vida y Accidente</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/AYUDAS Y BENEFICIOS SOCIALES/SOLICITUD INDEMNIZACIÓN SEGURO DE VIDA Y ACCIDENTE.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/AYUDAS Y BENEFICIOS SOCIALES/SOLICITUD INDEMNIZACIÓN SEGURO DE VIDA Y ACCIDENTE.pdf" download="CGT_Solicitud_Indemnizacion_Seguro_Vida.pdf" class="btn"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Solicitud Cambio de Beneficiario Seguro de Vida y Accidentes</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/AYUDAS Y BENEFICIOS SOCIALES/SOLICITUD CAMBIO BENEFICIARIOS SEGURO DE VIDA Y ACCIDENTES.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/AYUDAS Y BENEFICIOS SOCIALES/SOLICITUD CAMBIO BENEFICIARIOS SEGURO DE VIDA Y ACCIDENTES.pdf" target="_blank" download="CGT_Solicitud_Cambio_Beneficiario.pdf" class="btn"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Solicitud Concesión Anticipo</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/AYUDAS Y BENEFICIOS SOCIALES/SOLICITUD DE CONCESIÓN DE ANTICIPO.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/AYUDAS Y BENEFICIOS SOCIALES/SOLICITUD DE CONCESIÓN DE ANTICIPO.pdf" download="1234" class="btn"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Solicitud Concesión de Auxilio por Defunción</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/AYUDAS Y BENEFICIOS SOCIALES/SOLICITUD DE CONCESIÓN DE AUXILIO POR DEFUNCIÓN Y O GASTOS DE FALLECIMIENTO.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/AYUDAS Y BENEFICIOS SOCIALES/SOLICITUD DE CONCESIÓN DE AUXILIO POR DEFUNCIÓN Y O GASTOS DE FALLECIMIENTO.pdf" target="_blank" download="CGT_Solicitud_Auxilio_Defuncion.pdf" class="btn"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="accordion-item">
           <h2 class="accordion-header">
             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIgualdad" aria-expanded="false" aria-controls="collapseIgualdad">
               <span class="encabezadoAcordeon" id="Igualdad">Igualdad</span>
             </button>
           </h2>
           <div id="collapseIgualdad" class="accordion-collapse collapse" aria-labelledby="headingIgualdad" data-bs-parent="#accordionDoc">
             <div class="accordion-body">
               <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6 g-5" id="">
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Adaptación I Plan de Igualdad Adif Alta Velocidad</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/IGUALDAD/Adaptación I Plan Igualdad Adif Alta Velocidad_2022_01_10.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/IGUALDAD/Adaptación I Plan Igualdad Adif Alta Velocidad_2022_01_10.pdf" class="btn" target="_blank" download="CGT_Adaptación_I_Plan_Igualdad_Adif_Alta_Velocidad.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Adaptación II Plan de Igualdad Adif</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/IGUALDAD/adaptación II PLAN IGUALDAD Adif 2022_01_10.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/IGUALDAD/adaptación II PLAN IGUALDAD Adif 2022_01_10.pdf" class="btn" target="_blank" download="CGT_Adaptación_II_PLAN_IGUALDAD_Adif.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Diagnóstico Informe Igualdad 2021</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/IGUALDAD/Diagnostico Informe Igualdad 2021.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/IGUALDAD/Diagnostico Informe Igualdad 2021.pdf" class="btn" target="_blank" download="CGT_Diagnostico_Informe_Igualdad_2021.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Informe Igualdad 2021 Adif Alta Velocidad</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/IGUALDAD/Informe Igualdad 2021 Adif Alta Velocidad.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/IGUALDAD/Informe Igualdad 2021 Adif Alta Velocidad.pdf" class="btn" target="_blank" download="CGT_Informe_Igualdad_2021_Adif_Alta_Velocidad.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="accordion-item">
           <h2 class="accordion-header">
             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLegislacion" aria-expanded="false" aria-controls="collapseLegislacion">
               <span class="encabezadoAcordeon" id="Legislacion">Legislación - Normativa Laboral</span>
             </button>
           </h2>
           <div id="collapseLegislacion" class="accordion-collapse collapse" aria-labelledby="headingLegislacion" data-bs-parent="#accordionDoc">
             <div class="accordion-body">
               <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6 g-5" id="">
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">BOE 16/07/19 Convenio ADIF</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/LEGISLACION/BOE-160719_ConvenioADIF.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/LEGISLACION/BOE-160719_ConvenioADIF.pdf" class="btn" target="_blank" download="CGT_BOE_160719_ConvenioADIF.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">I Convenio Colectivo ADIF</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/LEGISLACION/I Convenio Colectivo ADIF.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/LEGISLACION/I Convenio Colectivo ADIF.pdf" class="btn" target="_blank" download="CGT_I_Convenio_Colectivo_ADIF.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">I Convenio Colectivo ADIF Alta Velocidad</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/LEGISLACION/I Convenio Colectivo ADIF-ADIF ALTA VELOCIDAD.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/LEGISLACION/I Convenio Colectivo ADIF-ADIF ALTA VELOCIDAD.pdf" class="btn" target="_blank" download="CGT_I_Convenio_Colectivo_ADIF-ADIF_ALTA_VELOCIDAD.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Prórroga I Convenio Colectivo ADIF</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/LEGISLACION/Prorroga I CC ADIF.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/LEGISLACION/Prorroga I CC ADIF.pdf" class="btn" target="_blank" download="CGT_Prorroga_I_CC_ADIF.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Tablas Salariales ADIF 2022</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/LEGISLACION/Tablas Salariales ADIF 2022.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/LEGISLACION/Tablas Salariales ADIF 2022.pdf" class="btn" target="_blank" download="CGT_Tablas_Salariales_ADIF_2022.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">ORDEN FOM 2872/2010 - Títulos Habilitantes</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/LEGISLACION/Orden FOM 2872-2010, titulos habilitantes.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/LEGISLACION/Orden FOM 2872-2010, titulos habilitantes.pdf" class="btn" target="_blank" download="CGT_ORDEN_FOM_2872.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">RD929/2020 - Seguridad Operacional</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/LEGISLACION/RD929-2020_sobre_seguridad_operacional.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/LEGISLACION/RD929-2020_sobre_seguridad_operacional.pdf" class="btn" target="_blank" download="CGT_RD929-2020_sobre_seguridad_operacional.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">RD1561/1995 - Jornadas Especiales de Trabajo</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/LEGISLACION/RD1561-1995_jornadas_especiales_de_trabajo.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/LEGISLACION/RD1561-1995_jornadas_especiales_de_trabajo.pdf" class="btn" target="_blank" download="CGT_RD1561-1995_jornadas_especiales_de_trabajo.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="accordion-item">
           <h2 class="accordion-header" id="headingLicencias">
             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLicencias" aria-expanded="false" aria-controls="collapseLicencias">
               <span class="encabezadoAcordeon" id="Licencias">Licencias</span>
             </button>
           </h2>
           <div id="collapseLicencias" class="accordion-collapse collapse" aria-labelledby="headingLicencias" data-bs-parent="#accordionDoc">
             <div class="accordion-body">
               <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6 g-5" id="">
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Licencias ADIF y ADIF Alta Velocidad</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/LICENCIAS/LICENCIAS ADIF Y ADIF AV.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/LICENCIAS/LICENCIAS ADIF Y ADIF AV.pdf" class="btn" target="_blank" download="CGT_LICENCIAS_ADIF_Y_ADIF_AV.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/jpg_icon_black.png">
                     <div class="card-body">
                       <p class="card-text">Cuadro de las Relaciones de Parentesco</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/LICENCIAS/Parentesco.jpg" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/LICENCIAS/Parentesco.jpg" class="btn" target="_blank" download="CGT_Parentesco.jpg"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Parte de Incidencias</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/LICENCIAS/PARTE DE INCIDENCIAS.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/LICENCIAS/PARTE DE INCIDENCIAS.pdf" class="btn" target="_blank" download="CGT_PARTE_DE_INCIDENCIAS.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Solicitud Excedencia Voluntaria</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/LICENCIAS/SOLICITUD EXCEDENCIA VOLUNTARIA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/LICENCIAS/SOLICITUD EXCEDENCIA VOLUNTARIA.pdf" class="btn" target="_blank" download="CGT_SOLICITUD_EXCEDENCIA_VOLUNTARIA.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Solicitud Excedencia Forzosa</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/LICENCIAS/SOLICITUD DE EXCEDENCIA FORZOSA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/LICENCIAS/SOLICITUD DE EXCEDENCIA FORZOSA.pdf" class="btn" target="_blank" download="CGT_SOLICITUD_DE_EXCEDENCIA_FORZOSA.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Solicitud de Licencia</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/LICENCIAS/SOLICITUD DE LICENCIA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/LICENCIAS/SOLICITUD DE LICENCIA.pdf" class="btn" target="_blank" download="CGT_SOLICITUD_DE_LICENCIA.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Solicitud de Vacaciones</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/LICENCIAS/SOLICITUD DE VACACIONES.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/LICENCIAS/SOLICITUD DE VACACIONES.pdf" class="btn" target="_blank" download="CGT_SOLICITUD_DE_VACACIONES.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="accordion-item">
           <h2 class="accordion-header" id="headingMapa">
             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMapa" aria-expanded="false" aria-controls="collapseMapa">
               <span class="encabezadoAcordeon" id="Mapa_Red">Mapa Estaciones y Red ADIF-RENFE</span>
             </button>
           </h2>
           <div id="collapseMapa" class="accordion-collapse collapse" aria-labelledby="headingMapa" data-bs-parent="#accordionDoc">
             <div class="accordion-body">
               <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6 g-5" id="">
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Declaración sobre la Red 2022</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/MAPA ESTACIONES/DECLARACION SOBRE LA RED 2022.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/MAPA ESTACIONES/DECLARACION SOBRE LA RED 2022.pdf" class="btn" target="_blank" download="CGT_DECLARACION_SOBRE_LA_RED_2022.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Mapa Estaciones ADIF</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/MAPA ESTACIONES/Mapa Estaciones ADIF.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/MAPA ESTACIONES/Mapa Estaciones ADIF.pdf" class="btn" target="_blank" download="CGT_Mapa_Estaciones_ADIF.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="accordion-item">
           <h2 class="accordion-header" id="headingMedidas">
             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMedidas" aria-expanded="false" aria-controls="collapseMedidas">
               <span class="encabezadoAcordeon" id="Medidas_Conciliacion">Medidas de Conciliación</span>
             </button>
           </h2>
           <div id="collapseMedidas" class="accordion-collapse collapse" aria-labelledby="headingMedidas" data-bs-parent="#accordionDoc">
             <div class="accordion-body">
               <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6 g-5" id="">
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Medidas de Conciliación de la Vida Laboral, Familiar y Personal</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/MEDIDAS DE CONCILIACION/MEDIDAS DE CONCILIACION DE LA VIDA LABORAL.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/MEDIDAS DE CONCILIACION/MEDIDAS DE CONCILIACION DE LA VIDA LABORAL.pdf" target="_blank" download="CGT_MEDIDAS_DE_CONCILIACION.pdf" class="btn"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="accordion-item">
           <h2 class="accordion-header">
             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseModelos" aria-expanded="false" aria-controls="collapseModelos">
               <span class="encabezadoAcordeon" id="Solicitud_Empresa">Modelos Solicitud Empresa</span>
             </button>
           </h2>
           <div id="collapseModelos" class="accordion-collapse collapse" aria-labelledby="headingModelos" data-bs-parent="#accordionDoc">
             <br>
             <div class="accordion" id="accordionBilletes">
               <div class="accordion-item">
                 <h2 class="accordion-header" id="headingBilletes">
                   <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBilletes" aria-expanded="false" aria-controls="collapseBilletes">
                     <span class="subTitulo">Billetes</span>
                   </button>
                 </h2>
                 <div id="collapseBilletes" class="accordion-collapse collapse" aria-labelledby="headingBilletes" data-bs-parent="#accordionBilletes">
                     <br>                    
                     <div class="accordion-body">
                       <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6 g-5" id="">
                         <div class="col">
                           <div class="card shadow-sm h-100">
                             <img src="img/pdf_icon.png">
                             <div class="card-body">
                               <p class="card-text">Declaración Jurada Reconocimiento Beneficiarios</p>
                             </div>
                             <div class="card-footer d-flex justify-content-between align-items-center">
                               <div class="btn-group">
                                 <a href="doc/MODELOS SOLICITUD EMPRESA/BILLETES/DECLARACION JURADA RECONOCIMIENTO BENEFICIARIOS.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                                 <a href="doc/MODELOS SOLICITUD EMPRESA/BILLETES/DECLARACION JURADA RECONOCIMIENTO BENEFICIARIOS.pdf" target="_blank" download="CGT_DECLARACION_JURADA_BENEFICIARIOS.pdf" class="btn"><i class="fa fa-download"></i> Descargar</a>
                               </div>
                             </div>
                           </div>
                         </div>
                         <div class="col">
                           <div class="card shadow-sm h-100">
                             <img src="img/pdf_icon.png">
                             <div class="card-body">
                               <p class="card-text">Facilidades Internacionales de Transporte</p>
                             </div>
                             <div class="card-footer d-flex justify-content-between align-items-center">
                               <div class="btn-group">
                                 <a href="doc/MODELOS SOLICITUD EMPRESA/BILLETES/FACILIDADES INTERNACIONALES DE TRANSPORTE PARA PERSONAL FERROVIARIO 2019 V2.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                                 <a href="doc/MODELOS SOLICITUD EMPRESA/BILLETES/FACILIDADES INTERNACIONALES DE TRANSPORTE PARA PERSONAL FERROVIARIO 2019 V2.pdf" class="btn" target="_blank" download="CGT_FACILIDADES_INTERNACIONALES_DE_TRANSPORTE_PARA_PERSONAL_FERROVIARIO_2019.pdf"><i class="fa fa-download"></i> Descargar</a>
                               </div>
                             </div>
                           </div>
                         </div>
                         <div class="col">
                           <div class="card shadow-sm h-100">
                             <img src="img/pdf_icon.png">
                             <div class="card-body">
                               <p class="card-text">Petición Billete Internacional</p>
                             </div>
                             <div class="card-footer d-flex justify-content-between align-items-center">
                               <div class="btn-group">
                                 <a href="doc/MODELOS SOLICITUD EMPRESA/BILLETES/PETICION BILLETE INTERNACIONAL.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                                 <a href="doc/MODELOS SOLICITUD EMPRESA/BILLETES/PETICION BILLETE INTERNACIONAL.pdf" class="btn" target="_blank" download="CGT_PETICION_BILLETE_INTERNACIONAL.pdf"><i class="fa fa-download"></i> Descargar</a>
                               </div>
                             </div>
                           </div>
                         </div>
                         <div class="col">
                           <div class="card shadow-sm h-100">
                             <img src="img/pdf_icon.png">
                             <div class="card-body">
                               <p class="card-text">Petición Tarjeta Internacional</p>
                             </div>
                             <div class="card-footer d-flex justify-content-between align-items-center">
                               <div class="btn-group">
                                 <a href="doc/MODELOS SOLICITUD EMPRESA/BILLETES/PETICION TARJETA INTERNACONAL.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                                 <a href="doc/MODELOS SOLICITUD EMPRESA/BILLETES/PETICION TARJETA INTERNACONAL.pdf" class="btn" target="_blank" download="CGT_PETICION_TARJETA_INTERNACONAL.pdf"><i class="fa fa-download"></i> Descargar</a>
                               </div>
                             </div>
                           </div>
                         </div>
                         <div class="col">
                           <div class="card shadow-sm h-100">
                             <img src="img/pdf_icon.png">
                             <div class="card-body">
                               <p class="card-text">Recibí Acreditaciones Ferroviarias</p>
                             </div>
                             <div class="card-footer d-flex justify-content-between align-items-center">
                               <div class="btn-group">
                                 <a href="doc/MODELOS SOLICITUD EMPRESA/BILLETES/RECIBI ACREDITACIONES FERROVIARIAS.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                                 <a href="doc/MODELOS SOLICITUD EMPRESA/BILLETES/RECIBI ACREDITACIONES FERROVIARIAS.pdf" class="btn" target="_blank" download="CGT_RECIBI_ACREDITACIONES_FERROVIARIAS.pdf"><i class="fa fa-download"></i> Descargar</a>
                               </div>
                             </div>
                           </div>
                         </div>
                         <div class="col">
                           <div class="card shadow-sm h-100">
                             <img src="img/pdf_icon.png">
                             <div class="card-body">
                               <p class="card-text">Solicitud Acreditaciones Ferroviarias</p>
                             </div>
                             <div class="card-footer d-flex justify-content-between align-items-center">
                               <div class="btn-group">
                                 <a href="doc/MODELOS SOLICITUD EMPRESA/BILLETES/SOLICITUD DE ACREDITACIONES FERROVIARIAS - ADIF.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                                 <a href="doc/MODELOS SOLICITUD EMPRESA/BILLETES/SOLICITUD DE ACREDITACIONES FERROVIARIAS - ADIF.pdf" class="btn" target="_blank" download="CGT_SOLICITUD_DE_ACREDITACIONES_FERROVIARIAS.pdf"><i class="fa fa-download"></i> Descargar</a>
                               </div>
                             </div>
                           </div>
                         </div>
                         <div class="col">
                           <div class="card shadow-sm h-100">
                             <img src="img/pdf_icon.png">
                             <div class="card-body">
                               <p class="card-text">Viajes para Personal ADIF</p>
                             </div>
                             <div class="card-footer d-flex justify-content-between align-items-center">
                               <div class="btn-group">
                                 <a href="doc/MODELOS SOLICITUD EMPRESA/BILLETES/VIAJES PARA PERSONAL ADIF.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                                 <a href="doc/MODELOS SOLICITUD EMPRESA/BILLETES/VIAJES PARA PERSONAL ADIF.pdf" class="btn" target="_blank" download="CGT_VIAJES_PARA_PERSONAL_ADIF.pdf"><i class="fa fa-download"></i> Descargar</a>
                               </div>
                             </div>
                           </div>
                         </div>      
                       </div>
                     </div>
                 </div>
               </div>
               <div class="accordion-item">
                 <h2 class="accordion-header" id="headingNomina">
                   <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNomina" aria-expanded="false" aria-controls="collapseNomina">
                     <span class="subTitulo">Datos para Nómina y Reclamaciones de Haberes</span>
                   </button>
                 </h2>
                 <div id="collapseNomina" class="accordion-collapse collapse" aria-labelledby="headingNomina" data-bs-parent="#accordionBilletes">
                   <div class="accordion-body">
                     <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6 g-5" id="">
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">Anticipo Solicitud de Concesión</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/MODELOS SOLICITUD EMPRESA/NOMINA Y RECLAMACIONES/ANTICIPO SOLICITUD DE CONCESION.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/MODELOS SOLICITUD EMPRESA/NOMINA Y RECLAMACIONES/ANTICIPO SOLICITUD DE CONCESION.pdf" class="btn" target="_blank" download="CGT_ANTICIPO_SOLICITUD_DE_CONCESION.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">Datos Bancarios Abono en Nómina</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/MODELOS SOLICITUD EMPRESA/NOMINA Y RECLAMACIONES/DATOS BANCARIOS ABONO DE NOMINA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/MODELOS SOLICITUD EMPRESA/NOMINA Y RECLAMACIONES/DATOS BANCARIOS ABONO DE NOMINA.pdf" class="btn" target="_blank" download="CGT_DATOS_BANCARIOS_ABONO_DE_NOMINA.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">Inicio Cese Descuento Nómina Colegio de Huérfanos</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/MODELOS SOLICITUD EMPRESA/NOMINA Y RECLAMACIONES/INICIO CESE DESCUENTO NOMINA COLEGIO DE HUERFANOS.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/MODELOS SOLICITUD EMPRESA/NOMINA Y RECLAMACIONES/INICIO CESE DESCUENTO NOMINA COLEGIO DE HUERFANOS.pdf" class="btn" target="_blank" download="CGT_INICIO_CESE_DESCUENTO_NOMINA_COLEGIO_DE_HUERFANOS.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">Nota de Gastos de Viaje Personal Operativo</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/MODELOS SOLICITUD EMPRESA/NOMINA Y RECLAMACIONES/NOTA DE GASTOS DE VIAJE PERSONAL OPERATIVO.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/MODELOS SOLICITUD EMPRESA/NOMINA Y RECLAMACIONES/NOTA DE GASTOS DE VIAJE PERSONAL OPERATIVO.pdf" class="btn" target="_blank" download="CGT_NOTA_DE_GASTOS_DE_VIAJE_PERSONAL_OPERATIVO.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">Reclamación Incidencias Haberes del Trabajador</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/MODELOS SOLICITUD EMPRESA/NOMINA Y RECLAMACIONES/RECLAMACION INCIDENCIAS HABERES DEL TRABAJADOR.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/MODELOS SOLICITUD EMPRESA/NOMINA Y RECLAMACIONES/RECLAMACION INCIDENCIAS HABERES DEL TRABAJADOR.pdf" class="btn" target="_blank" download="CGT_RECLAMACION_INCIDENCIAS_HABERES_DEL_TRABAJADOR.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">Retención IRPF Comunicación Datos al Pagador</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/MODELOS SOLICITUD EMPRESA/NOMINA Y RECLAMACIONES/RETENCION IRPF COMUNICACION DATOS AL PAGADOR.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/MODELOS SOLICITUD EMPRESA/NOMINA Y RECLAMACIONES/RETENCION IRPF COMUNICACION DATOS AL PAGADOR.pdf" class="btn" target="_blank" download="CGT_RETENCION_IRPF_COMUNICACION_DATOS_AL_PAGADOR.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>     
                     </div>  
                   </div>
                 </div>
               </div>
             </div> <br>               
           </div>
         </div>
         <div class="accordion-item">
           <h2 class="accordion-header" id="headingProtocolo">
             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProtocolo" aria-expanded="false" aria-controls="collapseProtocolo">
               <span class="encabezadoAcordeon" id="Protocolos_Acoso">Protocolos Frente a los Acosos</span>
             </button>
           </h2>
           <div id="collapseProtocolo" class="accordion-collapse collapse" aria-labelledby="headingProtocolo" data-bs-parent="#accordionDoc">
             <div class="accordion-body">
               <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6 g-5" id="">
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Protocolo frente al Acoso Laboral 2021</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/PROTOCOLOS/2021_PROTOCOLO-ACOSO-LABORAL.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/PROTOCOLOS/2021_PROTOCOLO-ACOSO-LABORAL.pdf" class="btn" target="_blank" download="CGT_2021_PROTOCOLO-ACOSO-LABORAL.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Modelo de Denuncia por Acoso Laboral</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/PROTOCOLOS/MODELO DE DENUNCIA POR ACOSO LABORAL.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/PROTOCOLOS/MODELO DE DENUNCIA POR ACOSO LABORAL.pdf" class="btn" target="_blank" download="CGT_MODELO_DE_DENUNCIA_POR_ACOSO_LABORAL.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Protocolo frente al Acoso Sexual 2021</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/PROTOCOLOS/2021_PROTOCOLO-ACOSO-SEXUAL.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/PROTOCOLOS/2021_PROTOCOLO-ACOSO-SEXUAL.pdf" class="btn" target="_blank" download="CGT_2021_PROTOCOLO-ACOSO-SEXUAL.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Modelo de Denuncia por Acoso Sexual, por Razón de Sexo u Orientación Sexual</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/PROTOCOLOS/MODELO DE DENUNCIA POR ACOSO SEXUAL O POR RAZÓN DE SEXO U ORIENTACIÓN SEXUAL.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/PROTOCOLOS/MODELO DE DENUNCIA POR ACOSO SEXUAL O POR RAZÓN DE SEXO U ORIENTACIÓN SEXUAL.pdf" class="btn" target="_blank" download="CGT_MODELO_DENUNCIA_ACOSO_SEXUAL.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>                
               </div>
             </div>
           </div>
         </div>
         <div class="accordion-item">
           <h2 class="accordion-header" id="headingSalud">
             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSalud" aria-expanded="false" aria-controls="collapseSalud">
               <span class="encabezadoAcordeon" id="Salud_Laboral">Salud Laboral</span>
             </button>
           </h2>
           <div id="collapseSalud" class="accordion-collapse collapse" aria-labelledby="headingSalud" data-bs-parent="#accordionDoc">
             <br>
             <div class="accordion" id="accordionSalud">
               <div class="accordion-item">
                 <h2 class="accordion-header" id="headingOne">
                   <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     <span class="subTitulo">Legislacion</span>
                   </button>
                 </h2>
                 <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                   <div class="accordion-body">
                     <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6 g-5" id="">
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">BOE-LEY 31-1995</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/SALUD LABORAL/LEGISLACION/BOE-LEY 31-1995.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/SALUD LABORAL/LEGISLACION/BOE-LEY 31-1995.pdf" class="btn" target="_blank" download="CGT_BOE-LEY_31-1995.pdf" class="btn"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">BOE-RD 39-1997</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/SALUD LABORAL/LEGISLACION/BOE-RD 39-1997.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/SALUD LABORAL/LEGISLACION/BOE-RD 39-1997.pdf" class="btn" target="_blank" download="CGT_BOE-RD_39-1997.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">Guía Técnica Agentes Cancerígenos</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT AGENTES CANCERIGENOS.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT AGENTES CANCERIGENOS.pdf" class="btn" target="_blank" download="CGT_GT AGENTES CANCERIGENOS.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">Guía Técnica Amianto</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT AMIANTO.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT AMIANTO.pdf" class="btn" target="_blank" download="CGT_GT_AMIANTO.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">Guía Técnica Atmósferas Explosivas</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT ATMOSFERAS EXPLOSIVAS.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT ATMOSFERAS EXPLOSIVAS.pdf" class="btn" target="_blank" download="CGT_GT_ATMOSFERAS_EXPLOSIVAS.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">Guía Técnica Campos Electromagnéticos</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT CAMPOS ELECTROMAGNETICOS.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT CAMPOS ELECTROMAGNETICOS.pdf" class="btn" target="_blank" download="CGT_GT_CAMPOS_ELECTROMAGNETICOS.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">Guía Técnica Equipos de Trabajo</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT EQUIPOS DE TRABAJO.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT EQUIPOS DE TRABAJO.pdf" class="btn" target="_blank" download="CGT_GT_EQUIPOS_DE_TRABAJO.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">Guía Técnica Lugares de Trabajo</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT LUGARES DE TRABAJO.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT LUGARES DE TRABAJO.pdf" class="btn" target="_blank" download="CGT_GT_LUGARES_DE_TRABAJO.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">Guía Técnica Manipulación Manual de Cargas</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT MANIPULACION MANUAL DE CARGAS.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT MANIPULACION MANUAL DE CARGAS.pdf" class="btn" target="_blank" download="CGT_GT_MANIPULACION_MANUAL_DE_CARGAS.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">Guía Técnica Obras de Construcción</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT OBRAS DE CONSTRUCCION.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT OBRAS DE CONSTRUCCION.pdf" class="btn" target="_blank" download="CGT_GT_OBRAS_DE_CONSTRUCCION.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">Guía Técnica Equipos con Pantallas de Visualización</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT PVD.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT PVD.pdf" class="btn" target="_blank" download="CGT_GT_PVD.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">Guía Técnica Radiaciones Ópticas Artificiales</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT RADIACIONES OPTICAS ARTIFICIALES.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT RADIACIONES OPTICAS ARTIFICIALES.pdf" class="btn" target="_blank" download="CGT_GT
                               _RADIACIONES_OPTICAS_ARTIFICIALES.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">Guía Técnica Riesgo Eléctrico</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT RIESGO ELECTRICO.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT RIESGO ELECTRICO.pdf" class="btn" target="_blank" download="CGT_GT_RIESGO_ELECTRICO.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">Guía Técnica Ruido</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT RUIDO.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT RUIDO.pdf" class="btn" target="_blank" download="CGT_GT_RUIDO.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">Guía Técnica Señalización</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT SENALIZACION.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT SENALIZACION.pdf" class="btn" target="_blank" download="CGT_GT_SEÑALIZACION.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="card-text">Guía Técnica Vibraciones Mecánicas</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT VIBRACIONES MECANICAS.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/SALUD LABORAL/LEGISLACION/GT VIBRACIONES MECANICAS.pdf" class="btn" target="_blank" download="CGT_GT_VIBRACIONES_MECANICAS.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                         <div class="card shadow-sm h-100">
                           <img src="img/pdf_icon.png">
                           <div class="card-body">
                             <p class="">Legislación Prevención de Riesgos Laborales</p>
                           </div>
                           <div class="card-footer d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                               <a href="doc/SALUD LABORAL/LEGISLACION/LEGISLACIÓN PREVENCION DE RIESGOS LABORALES.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                               <a href="doc/SALUD LABORAL/LEGISLACION/LEGISLACIÓN PREVENCION DE RIESGOS LABORALES.pdf" class="btn" target="_blank" download="CGT_LEGISLACIÓN_PREVENCION_DE_RIESGOS_LABORALES.pdf"><i class="fa fa-download"></i> Descargar</a>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
             </div>
             <div class="accordion-item">
               <h2 class="accordion-header" id="headingPop">
                 <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePop" aria-expanded="false" aria-controls="collapsePop">
                   <span class="subTitulo">P.O.P. - Procedimientos Operativos de Prevención</span>
                 </button>
               </h2>
               <div id="collapsePop" class="accordion-collapse collapse" aria-labelledby="headingPop" data-bs-parent="#accordionExample">
                 <div class="accordion-body">
                   <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6 g-5" id="">
                     <div class="col">
                       <div class="card shadow-sm h-100">
                         <img src="img/pdf_icon.png">
                         <div class="card-body">
                           <p class="card-text">POP 01 - Evaluación de Riesgos Laborales</p>
                         </div>
                         <div class="card-footer d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                             <a href="doc/SALUD LABORAL/POP/POP 01/POP1+a+julio+21+con+anexos+firmado.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                             <a href="doc/SALUD LABORAL/POP/POP 01/POP1+a+julio+21+con+anexos+firmado.pdf" class="btn" target="_blank" download="CGT_POP01.pdf"><i class="fa fa-download"></i> Descargar</a>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="col">
                       <div class="card shadow-sm h-100">
                         <img src="img/pdf_icon.png">
                         <div class="card-body">
                           <p class="">POP 02 - Información y Gestión de Riesgos</p>
                         </div>
                         <div class="card-footer d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                             <a href="doc/SALUD LABORAL/POP/POP 02/POP+02+DIC+2015+firmado.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                             <a href="doc/SALUD LABORAL/POP/POP 02/POP+02+DIC+2015+firmado.pdf" class="btn" target="_blank" download="CGT_POP_02.pdf"><i class="fa fa-download"></i> Descargar</a>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="col">
                       <div class="card shadow-sm h-100">
                         <img src="img/pdf_icon.png">
                         <div class="card-body">
                           <p class="">POP 02 - Parte de Información de Riesgos (PIR)</p>
                         </div>
                         <div class="card-footer d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                             <a href="doc/SALUD LABORAL/POP/POP 02/PIR+formulario.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                             <a href="doc/SALUD LABORAL/POP/POP 02/PIR+formulario.pdf" class="btn" target="_blank" download="CGT_PIR+formulario.pdf"><i class="fa fa-download"></i> Descargar</a>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="col">
                       <div class="card shadow-sm h-100">
                         <img src="img/pdf_icon.png">
                         <div class="card-body">
                           <p class="">POP 03 - Gestión del Accidente de Trabajo</p>
                         </div>
                         <div class="card-footer d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                             <a href="doc/SALUD LABORAL/POP/POP 03/CGT_POP_03.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                             <a href="doc/SALUD LABORAL/POP/POP 03/CGT_POP_03.pdf" class="btn" target="_blank" download="CGT_POP_03.pdf"><i class="fa fa-download"></i> Descargar</a>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="col">
                       <div class="card shadow-sm h-100">
                         <img src="img/pdf_icon.png">
                         <div class="card-body">
                           <p class="">POP 06 - Formación en Prevención de Riesgos Laborales</p>
                         </div>
                         <div class="card-footer d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                             <a href="doc/SALUD LABORAL/POP/POP 06/POP+06+oct+2017+firmado+con+anexos.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                             <a href="doc/SALUD LABORAL/POP/POP 06/POP+06+oct+2017+firmado+con+anexos.pdf" class="btn" target="_blank" download="CGT_POP_06+Anexos.pdf"><i class="fa fa-download"></i> Descargar</a>
                           </div>
                         </div>
                       </div>
                     </div>                
                     <div class="col">
                       <div class="card shadow-sm h-100">
                         <img src="img/pdf_icon.png">
                         <div class="card-body">
                           <p class="">POP 07 - Equipos de Protección Individual</p>
                         </div>
                         <div class="card-footer d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                             <a href="doc/SALUD LABORAL/POP/POP 07/POP+07+EPI+firmado+junio+2016.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                             <a href="doc/SALUD LABORAL/POP/POP 07/POP+07+EPI+firmado+junio+2016.pdf" class="btn" target="_blank" download="CGT_POP_07_EPIs.pdf"><i class="fa fa-download"></i> Descargar</a>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="col">
                       <div class="card shadow-sm h-100">
                         <img src="img/pdf_icon.png">
                         <div class="card-body">
                           <p class="">POP 09 - Vigilancia de la Salud</p>
                         </div>
                         <div class="card-footer d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                             <a href="doc/SALUD LABORAL/POP/POP 09/POP+09+rev+11+junio+2019+firmado.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                             <a href="doc/SALUD LABORAL/POP/POP 09/POP+09+rev+11+junio+2019+firmado.pdf" class="btn" target="_blank" download="CGT_POP_09.pdf"><i class="fa fa-download"></i> Descargar</a>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="col">
                       <div class="card shadow-sm h-100">
                         <img src="img/pdf_icon.png">
                         <div class="card-body">
                           <p class="">POP 09 - Contenidos Examen de Salud Según IT-02</p>
                         </div>
                         <div class="card-footer d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                             <a href="doc/SALUD LABORAL/POP/POP 09/ContenidosExamenSalud_POP09.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                             <a href="doc/SALUD LABORAL/POP/POP 09/ContenidosExamenSalud_POP09.pdf" class="btn" target="_blank" download="CGT_ContenidosExamenSalud_POP09.pdf"><i class="fa fa-download"></i> Descargar</a>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="col">
                       <div class="card shadow-sm h-100">
                         <img src="img/pdf_icon.png">
                         <div class="card-body">
                           <p class="">POP 09 - Instrucción Técnica: IT02</p>
                         </div>
                         <div class="card-footer d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                             <a href="doc/SALUD LABORAL/POP/POP 09/IT-02+VIGILANCIA+SALUD+FIRMADA+DEF.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                             <a href="doc/SALUD LABORAL/POP/POP 09/IT-02+VIGILANCIA+SALUD+FIRMADA+DEF.pdf" class="btn" target="_blank" download="CGT_IT02_VigilanciaSalud.pdf"><i class="fa fa-download"></i> Descargar</a>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="col">
                       <div class="card shadow-sm h-100">
                         <img src="img/pdf_icon.png">
                         <div class="card-body">
                           <p class="">POP 10 - Ergonomía y Psicosociología Aplicada</p>
                         </div>
                         <div class="card-footer d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                             <a href="doc/SALUD LABORAL/POP/POP 10/POP+10+ERGONOMIA+Y+PSICOSOCIOLOGIA+APLICADA+aprobado.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                             <a href="doc/SALUD LABORAL/POP/POP 10/POP+10+ERGONOMIA+Y+PSICOSOCIOLOGIA+APLICADA+aprobado.pdf" class="btn" target="_blank" download="CGT_POP_10.pdf"><i class="fa fa-download"></i> Descargar</a>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="col">
                       <div class="card shadow-sm h-100">
                         <img src="img/pdf_icon.png">
                         <div class="card-body">
                           <p class="">POP 11 - Actividades de limpieza de vías, entrevías y vehículos ferroviarios de ADIF, y de limpieza/engrase de agujas</p>
                         </div>
                         <div class="card-footer d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                             <a href="doc/SALUD LABORAL/POP/POP 11/POP+11+firmado+14+julio+2015+con+anexos.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                             <a href="doc/SALUD LABORAL/POP/POP 11/POP+11+firmado+14+julio+2015+con+anexos.pdf" class="btn" target="_blank" download="CGT_POP_11.pdf"><i class="fa fa-download"></i> Descargar</a>
                           </div>
                         </div>
                       </div>
                     </div>              
                     <div class="col">
                       <div class="card shadow-sm h-100">
                         <img src="img/pdf_icon.png">
                         <div class="card-body">
                           <p class="">POP 12 - Coordinación de Actividades Empresariales</p>
                         </div>
                         <div class="card-footer d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                             <a href="doc/SALUD LABORAL/POP/POP 12/POP12+COORDINACION+aprobado+CT+25.10.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                             <a href="doc/SALUD LABORAL/POP/POP 12/POP12+COORDINACION+aprobado+CT+25.10.pdf" class="btn" target="_blank" download="CGT_POP_12.pdf"><i class="fa fa-download"></i> Descargar</a>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="col">
                       <div class="card shadow-sm h-100">
                         <img src="img/pdf_icon.png">
                         <div class="card-body">
                           <p class="">POP 16 - Directrices generales aplicables a empresas que realicen actividades en centros de trabajo de ADIF</p>
                         </div>
                         <div class="card-footer d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                             <a href="doc/SALUD LABORAL/POP/POP 16/POP16+octubre+2017+aprobado+con+anexos.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                             <a href="doc/SALUD LABORAL/POP/POP 16/POP16+octubre+2017+aprobado+con+anexos.pdf" target="_blank" download="1234" class="btn"><i class="fa fa-download"></i> Descargar</a>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="col">
                       <div class="card shadow-sm h-100">
                         <img src="img/pdf_icon.png">
                         <div class="card-body">
                           <p class="">POP 17 - Guía Informativa en Prevención de Riesgos Laborales</p>
                         </div>
                         <div class="card-footer d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                             <a href="doc/SALUD LABORAL/POP/POP 17/POP+17+GUÍA+INFORMATIVA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                             <a href="doc/SALUD LABORAL/POP/POP 17/POP+17+GUÍA+INFORMATIVA.pdf" class="btn" target="_blank" download="CGT_POP_17.pdf"><i class="fa fa-download"></i> Descargar</a>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="col">
                       <div class="card shadow-sm h-100">
                         <img src="img/pdf_icon.png">
                         <div class="card-body">
                           <p class="">POP 18 - Seguimiento y control de la acción preventiva y/o correctora</p>
                         </div>
                         <div class="card-footer d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                             <a href="doc/SALUD LABORAL/POP/POP 18/POP+18+junio+2019+con+anexo+firmado.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                             <a href="doc/SALUD LABORAL/POP/POP 18/POP+18+junio+2019+con+anexo+firmado.pdf" class="btn" target="_blank" download="CGT_POP_18.pdf"><i class="fa fa-download"></i> Descargar</a>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="col">
                       <div class="card shadow-sm h-100">
                         <img src="img/pdf_icon.png">
                         <div class="card-body">
                           <p class="">POP 20 - Normas Generales en la Realización de Maniobras</p>
                         </div>
                         <div class="card-footer d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                             <a href="doc/SALUD LABORAL/POP/POP 20/POP+20+MANIOBRAS.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                             <a href="doc/SALUD LABORAL/POP/POP 20/POP+20+MANIOBRAS.pdf" class="btn" target="_blank" download="CGT_POP_20.pdf"><i class="fa fa-download"></i> Descargar</a>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div><br>
           </div>
           </div>
         </div>
         <div class="accordion-item">
           <h2 class="accordion-header" id="headingTeletrabajo">
             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTeletrabajo" aria-expanded="false" aria-controls="collapseTeletrabajo">
               <span class="encabezadoAcordeon" id="Teletrabajo">Teletrabajo</span>
             </button>
           </h2>
           <div id="collapseTeletrabajo" class="accordion-collapse collapse" aria-labelledby="headingTeletrabajo" data-bs-parent="#accordionDoc">
             <div class="accordion-body">
               <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6 g-5" id="">
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Acuerdo Regulación del Trabajo a Distancia</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/TELETRABAJO/ACUERDO REGULACIÓN DEL TRABAJO A DISTANCIA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/TELETRABAJO/ACUERDO REGULACIÓN DEL TRABAJO A DISTANCIA.pdf" class="btn" target="_blank" download="CGT_ACUERDO_REGULACIÓN_TRABAJO_A_DISTANCIA.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Comunicado 61/21 - Queremos Teletrabajo en Buenas Condiciones</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/TELETRABAJO/COM 61. ADIF. QUEREMOS TELETRABAJO EN BUENAS CONDICIONES. ESTE ACUERDO NO ES SUFICIENTE.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/TELETRABAJO/COM 61. ADIF. QUEREMOS TELETRABAJO EN BUENAS CONDICIONES. ESTE ACUERDO NO ES SUFICIENTE.pdf" class="btn" target="_blank" download="CGT_COM_61/22.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>  
                   </div>
                 </div>
                 <div class="col">
                   <div class="card shadow-sm h-100">
                     <img src="img/pdf_icon.png">
                     <div class="card-body">
                       <p class="card-text">Modelo Acuerdo Individual Trabajo a Distancia</p>
                     </div>
                     <div class="card-footer d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <a href="doc/TELETRABAJO/MODELO ACUERDO INDIVIDUAL TRABAJO A DISTANCIA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                         <a href="doc/TELETRABAJO/MODELO ACUERDO INDIVIDUAL TRABAJO A DISTANCIA.pdf" class="btn" target="_blank" download="CGT_Modelo_Acuerdo_individual_teletrabajo.pdf"><i class="fa fa-download"></i> Descargar</a>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>     
     </div>
   </div>
 </main>
@endsection
