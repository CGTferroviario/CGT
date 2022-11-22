<style>
  .accordion-flush .accordion-item .accordion-button:hover {
    background: rgb(254, 71, 85);
    color: black !important;
  }
  .encabezadoAcordeon:hover{
    color:black;
  }
</style>
@extends('layouts.master')

@section('content')
<nav class="nav nav-pills flex-column flex-sm-row barra2">
  <a class="flex-sm-fill text-sm-center nav-link active" id="pills-documentacion-tab" data-bs-toggle="pill" data-bs-target="#pills-documentacion" type="button" role="tab" aria-controls="pills-documentacion" aria-selected="true">Documentación General</a>
  <a class="flex-sm-fill text-sm-center nav-link" id="pills-circulacion-tab" data-bs-toggle="pill" data-bs-target="#pills-circulacion" type="button" role="tab" aria-controls="pills-circulacion" aria-selected="false">Circulación</a>
  <a class="flex-sm-fill text-sm-center nav-link" id="pills-infraestructura-tab" data-bs-toggle="pill" data-bs-target="#pills-infraestructura" type="button" role="tab" aria-controls="pills-infraestructura" aria-selected="false">Infraestructura</a>
  <a class="flex-sm-fill text-sm-center nav-link" id="pills-oficinas-tab" data-bs-toggle="pill" data-bs-target="#pills-oficinas" type="button" role="tab" aria-controls="pills-oficinas" aria-selected="false">Oficinas</a>
</nav>

<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-documentacion" role="tabpanel" aria-labelledby="pills-documentacion-tab" tabindex="0">
    <div class="jumbotron jumbotron-fluid fondo">
      <div class="container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto centrado">
            <a href="http://cgtferroviario.es" target="blank"><img src="img/logo_med.png"></a>
            <a href="https://cgt.org.es/" target="blank"><img src="img/logoCGT_med.png"></a>
            <h1 class="titulo">Documentación General ADIF <br> SFFCGT</h1>
          </div>
        </div>
      </div>
    </div>
    
    <main class="bg-oscuro">
        
      <x-adif.sidebar />
       
      <x-adif.documentacion />
       
    </main>
  </div>
  <div class="tab-pane fade show" id="pills-circulacion" role="tabpanel" aria-labelledby="pills-circulacion-tab" tabindex="0">
    <div class="jumbotron jumbotron-fluid fondo2">
      <div class="container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto centrado">
            <a href="http://cgtferroviario.es" target="blank"><img src="img/logo_med.png"></a>
            <a href="https://cgt.org.es/" target="blank"><img src="img/logoCGT_med.png"></a>
            <h1 class="titulo">Documentación Circulación <br> SFFCGT</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container py-5">
      <div class="row">
        <div class="col-sm-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/pdf_icon.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex flex-column">
                        <div class="card-body">
                            <h5 class="card-title">Plataforma Reivindicativa CGT - CIRCULACIÓN</h5>
                            <p class="card-text">Este es la plataforma que recoge las reivindicaciones de CGT para el ámbito de la Circulación</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <div class="col-md-6 centrado">
                                <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                            </div>
                            <div class="col-md-6 centrado">
                                <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" target="_blank" download="CGT_Afiliacion_Nomina" class="btn"><i class="fa fa-download"></i> Descargar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/pdf_icon.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex flex-column">
                        <div class="card-body">
                            <h5 class="card-title">Folleto Derechos PVD (Pantallas de Visualización de Datos)</h5>
                            <p class="card-text">Un díptico que contiene las reivindicaciones y los derechos conseguidos en lo relativo a PVD</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <div class="col-md-6 centrado">
                                <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                            </div>
                            <div class="col-md-6 centrado">
                                <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" target="_blank" download="CGT_Afiliacion_Nomina" class="btn"><i class="fa fa-download"></i> Descargar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/pdf_icon.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex flex-column">
                        <div class="card-body">
                            <h5 class="card-title">Circular de Presidencia nº1</h5>
                            <p class="card-text">La Gestión Conjunta de la Seguridad en la Circulación: Administrador de Infraestructuras Ferroviarias / Renfe Operadora</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <div class="col-md-6 centrado">
                                <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                            </div>
                            <div class="col-md-6 centrado">
                                <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" target="_blank" download="CGT_Afiliacion_Nomina" class="btn"><i class="fa fa-download"></i> Descargar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="tab-pane fade show" id="pills-infraestructura" role="tabpanel" aria-labelledby="pills-infraestructura-tab" tabindex="0">
    <div class="jumbotron jumbotron-fluid fondo3">
      <div class="container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto centrado">
            <a href="http://cgtferroviario.es" target="blank"><img src="img/logo_med.png"></a>
            <a href="https://cgt.org.es/" target="blank"><img src="img/logoCGT_med.png"></a>
            <h1 class="titulo">Documentación Infraestructura <br> SFFCGT</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container py-5">
      <div class="row">
        <div class="col-sm-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/pdf_icon.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex flex-column">
                        <div class="card-body">
                            <h5 class="card-title">Marco Regulador de Mando Intermedio y Cuadro</h5>
                            <p class="card-text">Establece y desarrolla el marco específico de relaciones laborales del Grupo de Mando Intermedio y Cuadro</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <div class="col-md-6 centrado">
                                <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                            </div>
                            <div class="col-md-6 centrado">
                                <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" target="_blank" download="CGT_Afiliacion_Nomina" class="btn"><i class="fa fa-download"></i> Descargar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                      <img src="img/pdf_icon.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex flex-column">
                      <div class="card-body">
                        <h5 class="card-title">Plataforma Reivindicativa CGT - Administración y Gestión</h5>
                        <p class="card-text">Esta es la plataforma que recoge las reivindicaciones de CGT para el ámbito de las Oficinas</p>
                      </div>
                      <div class="card-footer d-flex justify-content-between align-items-center">
                        <div class="col-md-6 centrado">
                            <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                        </div>
                        <div class="col-md-6 centrado">
                            <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" target="_blank" download="CGT_Afiliacion_Nomina" class="btn"><i class="fa fa-download"></i> Descargar</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/pdf_icon.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex flex-column">
                        <div class="card-body">
                            <h5 class="card-title">Acuerdo Descripción Profesional MMII y Estructura de Apoyo</h5>
                            <p class="card-text">En este documento se recogen los diferentes niveles de las estructuras de apoyo, sus salarios y sus correspondientes funciones</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <div class="col-md-6 centrado">
                                <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                            </div>
                            <div class="col-md-6 centrado">
                                <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" target="_blank" download="CGT_Afiliacion_Nomina" class="btn"><i class="fa fa-download"></i> Descargar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
              <div class="row g-0">
                  <div class="col-md-4">
                      <img src="img/pdf_icon.png" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8 d-flex flex-column">
                      <div class="card-body">
                          <h5 class="card-title">Acuerdo Desarrollo Profesional de Administración y Gestión</h5>
                          <p class="card-text">Establece y desarrolla el marco específico de relaciones laborales del colectivo de Administración y Gestión.</p>
                      </div>
                      <div class="card-footer d-flex justify-content-between align-items-center">
                          <div class="col-md-6 centrado">
                              <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                          </div>
                          <div class="col-md-6 centrado">
                              <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" target="_blank" download="CGT_Afiliacion_Nomina" class="btn"><i class="fa fa-download"></i> Descargar</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="tab-pane fade show" id="pills-oficinas" role="tabpanel" aria-labelledby="pills-oficinas-tab" tabindex="0">
    <div class="jumbotron jumbotron-fluid fondo4">
      <div class="container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto centrado">
            <a href="http://cgtferroviario.es" target="blank"><img src="img/logo_med.png"></a>
            <a href="https://cgt.org.es/" target="blank"><img src="img/logoCGT_med.png"></a>
            <h1 class="titulo">Documentación Oficinas <br> SFFCGT</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container py-5">
      <div class="row">
        <div class="col-sm-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/pdf_icon.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex flex-column">
                        <div class="card-body">
                            <h5 class="card-title">Marco Regulador de Mando Intermedio y Cuadro</h5>
                            <p class="card-text">Establece y desarrolla el marco específico de relaciones laborales del Grupo de Mando Intermedio y Cuadro</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <div class="col-md-6 centrado">
                                <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                            </div>
                            <div class="col-md-6 centrado">
                                <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" target="_blank" download="CGT_Afiliacion_Nomina" class="btn"><i class="fa fa-download"></i> Descargar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                      <img src="img/pdf_icon.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex flex-column">
                      <div class="card-body">
                        <h5 class="card-title">Plataforma Reivindicativa CGT - Administración y Gestión</h5>
                        <p class="card-text">Esta es la plataforma que recoge las reivindicaciones de CGT para el ámbito de las Oficinas</p>
                      </div>
                      <div class="card-footer d-flex justify-content-between align-items-center">
                        <div class="col-md-6 centrado">
                            <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                        </div>
                        <div class="col-md-6 centrado">
                            <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" target="_blank" download="CGT_Afiliacion_Nomina" class="btn"><i class="fa fa-download"></i> Descargar</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/pdf_icon.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex flex-column">
                        <div class="card-body">
                            <h5 class="card-title">Acuerdo Descripción Profesional MMII y Estructura de Apoyo</h5>
                            <p class="card-text">En este documento se recogen los diferentes niveles de las estructuras de apoyo, sus salarios y sus correspondientes funciones</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <div class="col-md-6 centrado">
                                <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                            </div>
                            <div class="col-md-6 centrado">
                                <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" target="_blank" download="CGT_Afiliacion_Nomina" class="btn"><i class="fa fa-download"></i> Descargar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
              <div class="row g-0">
                  <div class="col-md-4">
                      <img src="img/pdf_icon.png" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8 d-flex flex-column">
                      <div class="card-body">
                          <h5 class="card-title">Acuerdo Desarrollo Profesional de Administración y Gestión</h5>
                          <p class="card-text">Establece y desarrolla el marco específico de relaciones laborales del colectivo de Administración y Gestión.</p>
                      </div>
                      <div class="card-footer d-flex justify-content-between align-items-center">
                          <div class="col-md-6 centrado">
                              <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                          </div>
                          <div class="col-md-6 centrado">
                              <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" target="_blank" download="CGT_Afiliacion_Nomina" class="btn"><i class="fa fa-download"></i> Descargar</a>
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

@endsection