<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="sindicato sector federal ferroviario renfe adif anarcosindicalismo trabajadores derechos">
  <meta name="description" content="Sector Federal Ferroviario - CGT">
  <meta name="author" content="Sector Federal Ferroviario - CGT">
  {{-- <meta http-equiv="refresh" content="30"> Refrescar cada 30 seg--}}
  <title>CGTFerroviario</title>

  @include('parciales.estilo')
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PTSDGJ7SBK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PTSDGJ7SBK');
</script>
<body>
    
@include('parciales.encabezado')

<main>
  @yield('contenido')
</main>

@include('parciales.pie')

@include('parciales.scripts')
      
</body>
</html>