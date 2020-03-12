@extends('layouts.default')
@section('content')

<div class="flex flex-wrap min-h-screen py-40">
  <div class="container flex flex-wrap mx-auto">
    <div class="xl:w-1/2 lg:w-1/2 md:w-auto sm:w-full p-10 leading-loose">
        <h2 class="text-2xl">— <?= $page->titulo() ?></h2>
        <h1 class="text-5xl"> <?= $page->subtitulo() ?> </h1> 
        <span class="text-base"><b><?= $page->empresa() ?></b></span><br>
        <span class="text-base"><i class="fas fa-map-marker-alt text-blue-600"></i> <?= $page->direccion() ?></span><br>
        <span class="text-base"><?= $page->colonia() ?></span><br>
        <span class="text-base"><?= $page->ciudad() ?>, <?= $page->estado() ?></span><br>
        <span class="text-base">C.P. <?= $page->cp() ?></span><br>
        <span class="text-base"><i class="fas fa-envelope text-blue-600"></i> <a class="text-black hover:text-blue-600 hover:underline" href="mailto:<?= $page->correo() ?>"><?= $page->correo() ?></a></span><br>
        <span class="text-base"><i class="fas fa-phone text-blue-600"></i> <a class="text-black hover:text-blue-600 hover:underline" href="tel:<?= $page->telefono() ?>"><b><?= $page->telefono() ?></b></a></span><br>

    
        
        <div class="mt-10"> <?= $page->mapa() ?> </div>
      </div>

      <div class="xl:w-1/2 lg:w-1/2 md:w-auto sm:w-full p-10">

        <?php if($success): ?>
        <div class="alert success">
            <p><?= $success ?></p>
        </div>
        <?php else: ?>
        <?php if (isset($alert['error'])): ?>
            <div><?= $alert['error'] ?></div>
        <?php endif ?>
        <form method="post" action="<?= $page->url() ?>">
            <div class="field">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    Nombre <abbr title="required">*</abbr>
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mb-5" type="text" id="name" name="name" value="<?= $data['name'] ?? '' ?>" required>
                <?= isset($alert['name']) ? '<span class="alert error">' . html($alert['name']) . '</span>' : '' ?>
            </div>
            <div class="field">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                    Email <abbr title="required">*</abbr>
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mb-5" type="email" id="email" name="email" value="<?= $data['email'] ?? '' ?>" required>
                <?= isset($alert['email']) ? '<span class="alert error">' . html($alert['email']) . '</span>' : '' ?>
            </div>
            <div class="field">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone">
                    Teléfono <abbr title="required">*</abbr>
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mb-5" type="text" id="name" name="name" value="<?= $data['name'] ?? '' ?>" required>
                <?= isset($alert['phone']) ? '<span class="alert error">' . html($alert['phone']) . '</span>' : '' ?>
            </div>
            <div class="field">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="empresa">
                  Empresa <abbr title="required">*</abbr>
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mb-5" type="text" id="name" name="name" value="<?= $data['name'] ?? '' ?>" required>
              <?= isset($alert['empresa']) ? '<span class="alert error">' . html($alert['empresa']) . '</span>' : '' ?>
          </div>
            <div class="field">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="text">
                    Mensaje <abbr title="required">*</abbr>
                </label>
                <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mb-5" id="text" name="text" required>
                    <?= $data['text']?? '' ?>
                </textarea>
                <?= isset($alert['text']) ? '<span class="alert error">' . html($alert['text']) . '</span>' : '' ?>
            </div>
            <input class="shadow bg-blue-900 hover:bg-blue-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" name="submit" value="Submit">
        </form>
        <?php endif ?>
       
      </div>

</div>
</div>







@endsection