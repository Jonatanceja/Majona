@extends('layouts.default')
@section('content')

<div class="flex content-center flex-wrap bg-local bg-cover h-screen bg-center" style="background-image: url('/images/portada-nosotros.jpg'); border-left: 3rem solid white; border-right: 3rem solid white; border-bottom: 3rem solid white">
    <div class="container mx-auto">
      <div class="text-black text-left sm:w-auto md:w-full lg:w-1/2 xl:w-1/2 px-5">
        <h3 class="text-2xl -my-3">— Nosotros</h3>
        <h1 class="font-bold hidden xl:block lg:block md:block sm:hidden" style="font-size: 100px;">Comprometidos</h1>
        <h1 class="text-3xl font-bold block xl:hidden lg:hidden md:hidden sm:block">Comprometidos</h1>
        <p class="text-base my-3"><?= $page->principal() ?></p>
        <button class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 my-3">
          <a href="#">Contáctanos</a>
        </button>
        
    </div>
  </div>   
</div>   

<div class="flex flex-wrap bg-gray-200 py-16">
    <div class="container flex flex-wrap mx-auto content-center text-center">
        <div class="m-auto w-full px-10">
        <h2 class="text-xl text-center">— Elije Majona por nuestros — </h2>
        <h1 class="text-5xl text-center">Servicios</h1>
        <p class="text-base">En soluciones de transporte terrestre y almacenaje.</p>
        </div>
    <div class="xl:w-1/2 lg:w-1/2 md:w-full sm:w-auto p-10 my-auto text-left">
    <ul class="list-disc ml-10">
        <li>Disponible para clientes privados como para empresas.</li>
        <li>Asesoría para el cumplimiento de requisitos para empaque y traslado estatales, federales, y de salubridad de transporte por tipo de  carga.</li>
        <li>Asignación de unidades de transporte dedicadas y configuradas de acuerdo a su clasificación por tipo de carga.</li>
        <li>Pricing: hacemos un análisis de sus necesidades de transporte dando soluciones eficientes.</li>
    </ul>
    </div>
    <div class="xl:w-1/2 lg:w-1/2 md:w-auto sm:w-full p-10 my-auto text-left">
      <ul class="list-disc ml-10">
        <li>Tenemos presencia con un recinto fiscal estratégico sin transbordos, para su mercancía de carga desde lo que minimiza el riesgo de daños y  a pérdidas.</li>
        <li>Generamos comunicación antes, durante y después del transporte.</li>
        <li>GPS y telemetría de seguimiento en el transporte y carga.</li>
        <li>Acuerdos específicos en tiempos de recogida y entrega.</li>
      </ul>
    </div>
  </div>
  </div>

  <div class="container m-auto p-8 text-center">

  
    <div class="flex flex-wrap -mx-4 mb-8 content-center">
       <div class="flex xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-full p-4">
          <div class="bg-white rounded-lg p-16" style="box-shadow: 0px 2px 48px rgba(0, 50, 93, 0.3);">
            <img class="m-auto" src="/images/mision.png" alt="Icono de transporte">
            <h1 class="mt-2 text-lg font-bold"><b>Misión</b></h1> 
            <p class="mt-2 text-sm my-0"><?= $page->mision() ?></p>
          </div>
       </div>
       <div class="flex xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-full p-4">
        <div class="bg-white rounded-lg p-16" style="box-shadow: 0px 2px 48px rgba(0, 50, 93, 0.3);">
          <img class="m-auto" src="/images/vision.png" alt="Icono de transporte">
          <h1 class="mt-2 text-lg font-bold"><b>Visión</b></h1> 
          <p class="mt-2 text-sm my-0"><?= $page->vision() ?></p>
        </div>
     </div><div class="flex xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-full p-4">
      <div class="bg-white rounded-lg p-16" style="box-shadow: 0px 2px 48px rgba(0, 50, 93, 0.3);">
        <img class="m-auto" src="/images/valores.png" alt="Icono de transporte">
        <h1 class="mt-2 text-lg font-bold"><b>Valores</b></h1> 
        <p class="mt-2 text-sm my-0"><?= $page->valores() ?></p>
      </div>
   </div>
  
    
  </div>

  </div>

  <div class="flex content-center flex-wrap bg-local bg-cover bg-right text-right text-black p-10 h-64 py-64" style="background-image: url('/images/cta-nosotros.jpg');">
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