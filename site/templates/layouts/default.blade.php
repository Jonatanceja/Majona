<!doctype html>
<html lang="e">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $site->title() }} | {{ $page->title() }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <style>
        body{ position:absolute;top:0;left:0;right:0;bottom:0; }
        body > .preventive{ position:absolute;top:50%;-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);width:100%; }
        body > .preventive img{ display:block;margin:0 auto;max-width:250px;width:35%; }
        h1,h2,h3{font-family: 'Titillium Web', sans-serif;}
    </style>
</head>
<body>
    <nav class="flex items-center justify-between flex-wrap bg-white p-6 fixed z-10 w-full">
        <div class="flex items-center flex-shrink-0 text-white mr-6 ml-6">
        <a href="<?= $site->url() ?>"><img src="/images/majona-logo.png"></a>
        </div>
        <div class="block lg:hidden">
          <button class="navbar-burger flex items-center px-3 py-2 border rounded text-blue-800 border-blue-800 hover:text-blue-600 hover:border-blue-600">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
          </button>
        </div>
        <div id="main-nav" class="w-full block flex-grow lg:flex lg:items-center lg:w-auto hidden">
          <div class="text-sm lg:flex-grow m-auto text-center uppercase">
            <a href="<?= $site->url() ?>" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-blue-700 mr-4">
              Inicio
            </a>
            <a href="/nosotros/" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-blue-700 mr-4">
              Sobre nosotros
            </a>
            <a href="/servicios/" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-blue-700 mr-4">
              Servicios
            </a>
            <a href="/contacto/" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-blue-700 mr-4">
              Cotización
            </a>
            <a href="/contacto/" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-blue-700">
              Contacto
            </a>
          </div>
          <div class="text-center">
            <a href="#" class="inline-block text-sm px-4 py-2 leading-none text-black hover:text-blue-700 font-bold mt-4 lg:mt-0 text-centert">Tel. (33)1493-7346</a><br>
          </div>
        </div>
      </nav>

      
@yield('content')
<footer class="flex flex-wrap bg-blue-900">
<div class="container m-auto p-5">
  <div class="flex sm:w-full md:w-2/3 lg:w-2/3 xl:w-2/3 text-blue-200 text-sm">Todos los derechos reservados Majona Logistica Inteligente, SA de CV  | Términos y condiciones | Aviso de privacidad</div>
</div>
</footer>
<script src="{{ mix('js/app.js') }}"></script>
<script>// Navbar Toggle
  document.addEventListener('DOMContentLoaded', function () {
  
    // Get all "navbar-burger" elements
    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  
    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {
  
      // Add a click event on each of them
      $navbarBurgers.forEach(function ($el) {
        $el.addEventListener('click', function () {
  
          // Get the "main-nav" element
          var $target = document.getElementById('main-nav');
  
          // Toggle the class on "main-nav"
          $target.classList.toggle('hidden');
  
        });
      });
    }
  
  });</script>
</body>
</html>
