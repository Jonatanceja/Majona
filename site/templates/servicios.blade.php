@extends('layouts.default')
@section('content')

<div class="flex content-center flex-wrap bg-local bg-cover h-screen mx-0 sm:mx-0 md:mx-0 lg:mx-12 xl:mx-12 -mt-0 sm:-mt-0 md:-mt-0 lg:-mt-12 xl:-mt-12" style="background-image: url('/images/servicios-portada.jpg');">
    <div class="container m-auto">
      <div class="text-black text-left sm:w-auto md:w-full lg:w-1/2 xl:w-1/2 px-5">
        <h3 class="text-2xl -my-3">— Servicios</h3>
        <h1 class="font-bold hidden xl:block lg:block md:block sm:hidden" style="font-size: 100px">Soluciones</h1>
        <h1 class="text-3xl font-bold block xl:hidden lg:hidden md:hidden sm:block">Soluciones</h1>
        <h2 class="text-2xl sm:text-2xl md:text-5xl lg:text-5xl xl:text-5xl">en transporte terrestre</h2>
        <button class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 my-3">
          <a href="<?= $site->whatsapp() ?>">Contáctanos</a>
        </button>
        
    </div>
  </div>   
</div>   

<div class="flex flex-wrap bg-gray-200 py-16 bg-fixed bg-cover mt-0 sm:mt-0 md:mt-0 lg:mt-12 xl:mt-12" style="background-image: url('/images/servicio-bodega.jpg');">
    <div class="container flex flex-wrap mx-auto content-center text-left text-white">
        <div class="m-auto w-full px-10">
        <img src="/images/3pl.png" alt="icono">
        <h1 class="text-4xl text-left"><?= $page->servicio1() ?></h1>
        <p class="text-base py-5 mb-5"><?= $page->contenido1() ?></p>
        <button class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 my-5">
            <a href="/contacto/">Contáctanos</a>
          </button>
        </div>
    </div>
</div> 

<div class="flex flex-wrap bg-gray-200 py-16">
    <div class="container flex flex-wrap mx-auto content-center text-left text-black">
        <div class="m-auto w-full px-10">
        <img src="/images/terrestre.png" alt="icono">
        <h1 class="text-4xl text-left"><?= $page->servicio2() ?></h1>
        <p class="text-base py-2"><?= $page->contenido2() ?></p>
        <button class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 my-5">
            <a href="/contacto/">Contáctanos</a>
          </button>
        </div>
    </div>
</div>    

<div class="flex flex-wrap bg-gray-200 py-16 bg-fixed bg-cover" style="background-image: url('/images/servicios-camion.jpg');">
    <div class="container flex flex-wrap mx-auto content-center text-left text-white">
        <div class="m-auto w-full px-10">
        <img src="/images/expeditado-2.png" alt="icono">
        <h1 class="text-4xl text-left"><?= $page->servicio3() ?></h1>
        <p class="text-base py-5 mb-5"><?= $page->contenido3() ?></p>
        <button class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 my-5">
            <a href="/contacto/">Contáctanos</a>
          </button>
        </div>
    </div>
</div> 

<div class="flex flex-wrap bg-gray-200 py-16">
    <div class="container flex flex-wrap mx-auto content-center text-left text-black">
        <div class="m-auto w-full px-10">
        <img src="/images/temperatura.png" alt="icono">
        <h1 class="text-4xl text-left"><?= $page->servicio4() ?></h1>
        <p class="text-base py-2"><?= $page->contenido4() ?></p>
        <button class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 my-5">
            <a href="/contacto/">Contáctanos</a>
          </button>
        </div>
    </div>
</div>  

<div class="flex flex-wrap bg-gray-200 py-16 bg-fixed bg-cover" style="background-image: url('/images/servicios-camino.jpg');">
    <div class="container flex flex-wrap mx-auto content-center text-left text-white">
        <div class="m-auto w-full px-10">
        <img src="/images/3pl.png" alt="icono">
        <h1 class="text-4xl text-left"><?= $page->servicio5() ?></h1>
        <p class="text-base py-5 mb-5"><?= $page->contenido5() ?></p>
        <button class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 my-5">
            <a href="/contacto/">Contáctanos</a>
          </button>
        </div>
    </div>
</div> 

<div class="flex flex-wrap bg-gray-200 py-16">
    <div class="container flex flex-wrap mx-auto content-center text-left text-black">
        <div class="m-auto w-full px-10">
        <img src="/images/distribucion.png" alt="icono">
        <h1 class="text-4xl text-left"><?= $page->servicio6() ?></h1>
        <p class="text-base py-2"><?= $page->contenido6() ?></p>
        <button class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 my-5">
            <a href="/contacto/">Contáctanos</a>
          </button>
        </div>
    </div>
</div>  

<div class="flex content-center flex-wrap bg-local bg-cover bg-right text-right text-black p-10 h-64 py-64" style="background-image: url('/images/cta-servicios.jpg');">
    <div class="container mx-auto">
      <div class="text-black w-auto">
        <h3 class="text-3xl -my-3">— Contáctanos</h3>
        <p class="text-xl my-3">Solicita tu cotización</p>
        <button class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 my-3">
          <a href="/contacto/">Contáctanos</a>
        </button>
        
    </div>
  </div> 
  
  </div>
@endsection