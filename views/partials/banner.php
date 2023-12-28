<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex justify-between">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">
        
      <?= $heading ?>
        
      </h1>
        <?php if (urlIs('/notes')) :?>
          <div class="mx-4 mt-2 bg-sky-400 w-32 h-8 rounded-md shadow-md shadow-gray-600 hover:bg-sky-300 flex text-center leading-1 justify-center items-center ">
            <a href="/notes/create" >Add New Note</a>
          </div>
        <? endif ?>
      
    </div>
  </header>