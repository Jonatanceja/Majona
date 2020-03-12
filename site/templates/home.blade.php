@extends('layouts.default')
@section('content')
<?php if($image = $page->fondo()->toFile()): ?>
<div class="flex content-center flex-wrap bg-local bg-cover h-screen mx-0 sm:mx-0 md:mx-0 lg:mx-12 xl:mx-12 -mt-0 sm:-mt-0 md:-mt-0 lg:-mt-12 xl:-mt-12" style="background-image: url('<?= $image->url() ?>');">
  <?php endif ?>
    <div class="container m-auto">
      <div class="flex content-center mt-12 flex-wrap text-black text-left w-auto sm:w-auto md:w-full lg:w-1/2 xl:w-1/2 px-5">
        <h3 class="text-2xl">— <?= $page->titulo() ?></h3>
        <h1 class="text-6xl font-bold"><?= $page->subtitulo() ?> </h1>
        <p class="text-base my-3"><?= $page->texto() ?></p>
        <button class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 my-3">
          <a href="<?= $page->enlace() ?>" target="_blank"><?= $page->boton() ?></a>
        </button>
        
    </div>
  </div>   
</div>

<div class="flex content-center flex-wrap h-auto py-16 bg-gray-200">
  <div class="container flex flex-wrap m-auto p-8 text-left">
  <div class="xl:w-1/2 lg:w-1/2 md:w-full sm:w-auto p-10 my-auto">
    <?php if($image = $page->imagen_intro()->toFile()): ?>
    <div><img class="w-full" style="box-shadow: -20px 20px 0px #00325D;" src="<?= $image->url() ?>"></div>
    <?php endif ?>
  </div>
  <div class="w-auto xl:w-1/2 lg:w-1/2 md:w-auto sm:w-full p-10 my-auto">
    <h2 class="text-2xl text-blue-700">— <?= $page->subtitulo_intro() ?></h2>
    <h1 class="text-5xl leading-tight mb-3"><?= $page->titulo_intro() ?></h1> 
    <p class="text-base"><?= $page->texto_intro() ?></p>
  </div>
</div>
</div>

<div class="flex content-center flex-wrap h-auto py-8">
  <div class="container flex flex-wrap mx-auto content-center my-auto">
  <div class="xl:w-1/3 lg:w-1/3 md:w-full sm:w-auto xs:w-full p-10 my-auto">
    <p><?= $page->texto_2()->kt() ?></p>
    <button class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 mt-10">
      <a href="<?= $page->url_2() ?>"><?= $page->boton_2() ?></a>
    </button>
  </div>
  <div class="xl:w-2/3 lg:w-2/3 md:w-full sm:w-auto p-10 my-auto">
    <?php if($image = $page->imagen_2()->toFile()): ?>
    <div><img style="box-shadow: -20px 20px 0px #00325D;" src="<?= $image->url() ?>"></div>
    <?php endif ?>
  </div>
  </div>
</div>

  <div class="m-auto w-full"><h1 class="text-black text-center text-5xl m-10">Nuestros Servicios</h1></div>

  <div class="flex content-center flex-wrap text-center">
    <div class="container m-auto p-8 text-center">
  
    <div class="flex flex-wrap -mx-4 mb-8 content-center text-center">
  
      <div class="flex-none w-full xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-full mx-auto">
        <div class="p-8 mx-6">
          <?php if($image = $page->icono_1()->toFile()): ?>
          <div><img class="m-auto" src="<?= $image->url() ?>"></div>
          <?php endif ?>
          <h1 class="mt-2 text-lg font-bold"><b><?= $page->titulo_1() ?></b></h1> 
          <p class="text-sm my-4"><?= $page->texto_anuncio_1() ?></p>
          <button class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 my-3">
            <a href="<?= $page->enlace() ?>" target="_blank"><?= $page->boton() ?></a>
          </button>
        </div>
      </div>

      <div class="flex-none w-full xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-full mx-auto">
        <div class="p-8 mx-6">
          <?php if($image = $page->icono_2()->toFile()): ?>
          <div><img class="m-auto" src="<?= $image->url() ?>"></div>
          <?php endif ?>
          <h1 class="mt-2 text-lg font-bold"><b><?= $page->titulo_2() ?></b></h1> 
          <p class="text-sm my-4"><?= $page->texto_anuncio_2() ?></p>
          <button class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 my-3">
            <a href="<?= $page->enlace() ?>" target="_blank"><?= $page->boton() ?></a>
          </button>
        </div>
      </div>

      <div class="flex-none w-full xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-full mx-auto">
        <div class="p-8 mx-6">
          <?php if($image = $page->icono_3()->toFile()): ?>
          <div><img class="m-auto" src="<?= $image->url() ?>"></div>
          <?php endif ?>
          <h1 class="mt-2 text-lg font-bold"><b><?= $page->titulo_3() ?></b></h1> 
          <p class="text-sm my-4"><?= $page->texto_anuncio_3() ?></p>
          <button class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 my-3">
            <a href="<?= $page->enlace() ?>" target="_blank"><?= $page->boton() ?></a>
          </button>
        </div>
      </div>
  
  </div>
  </div>
  </div>
  

<?php if($image = $page->bg_2()->toFile()): ?>
  <div class="flex content-center flex-wrap bg-fixed bg-cover text-center text-white p-40" style="background-image: url('<?= $image->url() ?>');">
  <?php endif ?>
  <div class="container m-auto p-8 text-center text-white">

  <div class="flex flex-wrap -mx-4 mb-8 content-center text-center">

    <div class="flex-none w-full xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-full mx-auto">
      <div class="p-6">
        <span class="text-center text-5xl"><?= $page->icono_4() ?></span>
        <h1 class="mt-2 text-lg font-bold"><b><?= $page->titulo_4() ?></b></h1> 
      </div>
    </div>

    <div class="flex-none w-full xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-full mx-auto">
     <div class="p-6">
      <span class="text-center text-5xl"><?= $page->icono_5() ?></span>
      <h1 class="mt-2 text-lg font-bold"><b><?= $page->titulo_5() ?></b></h1> 
     </div>
    </div>
 
 <div class="flex-none w-full xl:w-1/3 lg:w-1/3 md:w-1/3 sm:w-full mx-auto">
   <div class="p-6">
    <span class="text-center text-5xl"><?= $page->icono_6() ?></span>
    <h1 class="mt-2 text-lg font-bold"><b><?= $page->titulo_6() ?></b></h1> 
   </div>
  </div>

</div>
</div>
</div>

<?php if($image = $page->bg_3()->toFile()): ?>
<div class="flex content-center flex-wrap bg-local bg-cover bg-right text-right text-black p-10 h-64 py-64" style="background-image: url('<?= $image->url() ?>');">
  <?php endif ?>
  <div class="container mx-auto">
    <div class="text-black w-auto">
      <h3 class="text-6xl -my-3 bold text-white" style="text-shadow: 2px 2px 8px #000000;"><?= $page->cta_1() ?></h3>
      <p class="text-3xl my-3 text-white">— <?= $page->cta_2() ?></p>
      <button class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 my-3">
        <a href="/contacto/">Contáctanos</a>
      </button>
      
  </div>
</div> 

</div>











@endsection
