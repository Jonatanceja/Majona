@extends('layouts.default')
@section('content')

<div class="flex content-center flex-wrap bg-local bg-cover h-screen" style="background-image: url('/images/portada-home.jpg'); border-left: 3rem solid white; border-right: 3rem solid white; border-bottom: 3rem solid white">
    <div class="container mx-auto">
      <div class="text-black text-left sm:w-auto md:w-full lg:w-1/2 xl:w-1/2 px-5">
        <h3 class="text-2xl -my-3">— Soluciones</h3>
        <h1 class="font-bold hidden xl:block lg:block md:block sm:hidden" style="font-size: 100px">en logística</h1>
        <h1 class="text-5xl font-bold block xl:hidden lg:hidden md:hidden sm:block">en logística</h1>
        <h2 class="text-xl xl:text-5xl lg:text-5xl md:text-4xl sm:text-xl">y transporte terrestre</h2>
        <p class="text-base my-3"><?= $page->principal() ?></p>
        <button class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 my-3">
          <a href="#">Contáctanos</a>
        </button>
        
    </div>
  </div>   
</div>   


<div class="flex content-center flex-wrap bg-gray-200 h-auto py-16">
  <div class="container flex flex-wrap mx-auto content-center">
  <div class="xl:w-1/2 lg:w-1/2 md:w-full sm:w-auto p-10 my-auto">
    <div><img class="w-full" style="box-shadow: -20px 20px 0px #00325D;" src="/images/nosotros-transporte.jpg" alt="Transporte de carga"></div>
  </div>
  <div class="xl:w-1/2 lg:w-1/2 md:w-auto sm:w-full p-10 my-auto">
    <h2 class="text-2xl">— Sobre nosotros</h2>
    <h1 class="text-5xl">Compromiso</h1> 
    <p class="text-base"><?= $page->compromiso() ?></p>
    <p class="mt-10"><a class="underline italic text-blue-500" href="#">leer más</a></p>
  </div>
</div>
</div>

<div class="flex content-center flex-wrap bg-white h-auto py-16">
  <div class="container flex flex-wrap mx-auto content-center my-auto">
  <div class="xl:w-1/3 lg:w-1/3 md:w-full sm:w-auto xs:w-full p-10 my-auto">
    <h2 class="text-2xl">— Servicios</h2>
    <h1 class="text-5xl">Transporte</h1> 
    <ul class="list-disc ml-10">
      <?= $page->transporte() ?> 
    </ul>
    <p class="mt-10"><a class="underline italic text-blue-500" href="#">leer más</a></p>
  </div>
  <div class="xl:w-2/3 lg:w-2/3 md:w-full sm:w-auto p-10 my-auto">
    <div><img style="box-shadow: -20px 20px 0px #00325D;" src="/images/compromiso-transporte.jpg" alt="Montacargas"></div>
  </div>
</div>
</div>

  

<div class="container m-auto p-8 text-center">

  
  <div class="flex flex-wrap -mx-4 mb-8 content-center">
     <div class="flex xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-full p-4">
        <div class="bg-white rounded-lg p-16" style="box-shadow: 0px 2px 48px rgba(0, 50, 93, 0.3);">
          <img class="m-auto" src="/images/015-cargo-2.png" alt="Icono de transporte">
          <h1 class="mt-2 text-lg font-bold"><b><?= $page->r1() ?></b></h1> 
          <p class="mt-2 text-sm my-0"><?= $page->r1contenido() ?></p>
        </div>
     </div>
     <div class="flex xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-full p-4">
      <div class="bg-white rounded-lg p-16" style="box-shadow: 0px 2px 48px rgba(0, 50, 93, 0.3);">
        <img class="m-auto" src="/images/099-premium-2.png" alt="Icono de transporte">
        <h1 class="mt-2 text-lg font-bold"><b><?= $page->r2() ?></b></h1> 
        <p class="mt-2 text-sm my-0"><?= $page->r2contenido() ?></p>
      </div>
   </div><div class="flex xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-full p-4">
    <div class="bg-white rounded-lg p-16" style="box-shadow: 0px 2px 48px rgba(0, 50, 93, 0.3);">
      <img class="m-auto" src="/images/067-logistic-9.png" alt="Icono de transporte">
      <h1 class="mt-2 text-lg font-bold"><b><?= $page->r3() ?></b></h1> 
      <p class="mt-2 text-sm my-0"><?= $page->r3contenido() ?></p>
    </div>
 </div>

  
</div>

</div>

<div class="flex content-center flex-wrap bg-local bg-cover text-center text-white -mt-56 pt-40" style="background-image: url('/images/cargas.jpg');">
  <div class="container m-auto p-8 text-center">
    <div><h1 class="text-white text-5xl m-10">Nuestros Servicios</h1></div>

  <div class="flex flex-wrap -mx-4 mb-8 content-center text-center">

    <div class="flex-none w-full xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-full mx-auto">
      <div class="p-16" style="box-shadow: 0px 2px 48px rgba(0, 50, 93, 0.3);">
        <img class="m-auto" src="/images/ftl.png" alt="Icono de transporte">
        <h1 class="mt-2 text-lg font-bold"><b><?= $page->servicio1() ?></b></h1> 
      </div>
    </div>

    <div class="flex-none w-full xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-full mx-auto">
     <div class="p-16" style="box-shadow: 0px 2px 48px rgba(0, 50, 93, 0.3);">
      <img class="m-auto" src="/images/ltl.png" alt="Icono de transporte">
      <h1 class="mt-2 text-lg font-bold"><b><?= $page->servicio2() ?></b></h1> 
     </div>
    </div>
 
 <div class="flex-none w-full xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-full mx-auto">
   <div class="p-16" style="box-shadow: 0px 2px 48px rgba(0, 50, 93, 0.3);">
    <img class="m-auto" src="/images/especializado.png" alt="Icono de transporte">
    <h1 class="mt-2 text-lg font-bold"><b><?= $page->servicio3() ?></b></h1> 
   </div>
  </div>

  <div class="flex-none w-full xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-full mx-auto">
      <div class="p-16" style="box-shadow: 0px 2px 48px rgba(0, 50, 93, 0.3);">
        <img class="m-auto" src="/images/expeditado.png" alt="Icono de transporte">
        <h1 class="mt-2 text-lg font-bold"><b><?= $page->servicio4() ?></b></h1> 
      </div>
    </div>

    <div class="flex-none w-full xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-full mx-auto">
     <div class="p-16" style="box-shadow: 0px 2px 48px rgba(0, 50, 93, 0.3);">
      <img class="m-auto" src="/images/arrastre-contenedores.png" alt="Icono de transporte">
      <h1 class="mt-2 text-lg font-bold"><b><?= $page->servicio5() ?></b></h1> 
     </div>
    </div>
 
 <div class="flex-none w-full xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-full mx-auto">
   <div class="p-16" style="box-shadow: 0px 2px 48px rgba(0, 50, 93, 0.3);">
    <img class="m-auto" src="/images/temperatura-controlada.png" alt="Icono de transporte">
    <h1 class="mt-2 text-lg font-bold"><b><?= $page->servicio6() ?></b></h1> 
   </div>
  </div>

  

  </div>
</div>

  
</div>



<div class="flex content-center flex-wrap bg-local bg-cover bg-right text-right text-black p-10 h-64 py-64" style="background-image: url('/images/transporte-cta.jpg');">
  <div class="container mx-auto">
    <div class="text-black w-auto">
      <h3 class="text-3xl -my-3">— Contáctanos</h3>
      <p class="text-xl my-3">Solicita tu cotización</p>
      <button class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 my-3">
        <a href="#">Contáctanos</a>
      </button>
      
  </div>
</div> 

</div>











@endsection
