<?php require('partials/head.php')?> 
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>  
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
     

      <div>
          <?php foreach ($notes as $note) :?>
              <li class="my-4">
                  <a href="/note?id=<?=$note['id']?>" class="text-gray-600  hover:underline ">
                  <?= htmlspecialchars($note['body']) ?>

                  </a>
                </li>
          <?php endforeach;?>
      </div>
      <div class=" bg-sky-400 w-full h-15 rounded-md shadow-md shadow-gray-600 hover:bg-sky-300 text-center">
        <a href="/notes/create" >Create New Note</a>
      </div>
  </div>
</main>
 

