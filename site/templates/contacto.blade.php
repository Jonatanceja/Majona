@extends('layouts.default')
@section('content')

<div class="flex flex-wrap min-h-screen py-40">
  <div class="container flex flex-wrap mx-auto">
    <div class="xl:w-1/2 lg:w-1/2 md:w-auto sm:w-full p-10">
        <h2 class="text-2xl">— Contactanos</h2>
        <h1 class="text-5xl">Oficinas</h1> 
        <p class="text-base"><?= $site->domicilio() ?></p><br>
        <a class="text-xl" href="tel:<?= $site->telefono() ?>"><b>Tel: <?= $site->telefono() ?></b></a>
        <div class="mt-10"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.015083745991!2d-103.41561988454755!3d20.7096120861721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428af0257e9449f%3A0xa41ebd2e60d0a295!2spiso%202%2C%20Blvrd%20Puerta%20de%20Hierro%205153%2C%20Puerta%20de%20Hierro%2C%2045116%20Zapopan%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1582035849804!5m2!1ses-419!2smx" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
      </div>
  <div class="xl:w-1/2 lg:w-1/2 md:w-auto sm:w-full p-10">
    <form class="w-full max-w-lg">
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
              Nombre
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Nombre">
            <p class="text-red-500 text-xs italic">Campo requerido.</p>
          </div>
          <div class="w-full md:w-1/2 px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
              Apellidos
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Apellidos">
          </div>
          <div class="w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-empresa">
              Empresa
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-empresa" type="text" placeholder="Nombre de tu empresa">
          </div>
          <div class="w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-telefono">
              Teléfono
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-teléfono" type="text" placeholder="Número Teléfonico">
          </div>
          <div class="w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-mercancia">
              Tipo de mercancia
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-mercancia" type="text" placeholder="¿Qué tipo de mercancia?">
          </div>
          <div class="w-full md:w-1/2 px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-origen">
              Origen
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-origen" type="text" placeholder="Ciudad">
          </div>
          <div class="w-full md:w-1/2 px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-destino">
              Destino
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-destino" type="text" placeholder="Ciudad">
          </div>
          <div class="w-full md:w-1/2 px-3 mb-6">
            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-transporte">
                <option>Camión 1</option>
                <option>Camión 2</option>
                <option>Camión 3</option>
              </select>
        
          </div>
          <div class="w-full md:w-1/2 px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-descripcion">
              Descripción de la mercancia
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-descripcion" type="text" placeholder="Descripción de la mercancia">
          </div>
          
          
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              E-mail
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email">
            <p class="text-gray-600 text-xs italic">Asegurate de que sea tu correo correcto</p>
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              Mensaje
            </label>
            <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="mensaje"></textarea>
            <p class="text-gray-600 text-xs italic">Deseso cotizar el transporte de mi mercancia...</p>
          </div>
        </div>
        <div class="md:flex md:items-center">
          <div class="md:w-1/3">
            <button class="shadow bg-blue-900 hover:bg-blue-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4" type="button">
              Enviar
            </button>
          </div>
          <div class="md:w-2/3"></div>
        </div>
      </form>
  </div>
</div>
</div>

@endsection