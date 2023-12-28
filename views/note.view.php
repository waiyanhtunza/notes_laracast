<?php require('partials/head.php')?> 
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>  
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
     

      <div>

          <p class="my-4">
            <a href="/notes" class="underline text-sky-600 text-lg font-bold" > <= ... go back</a>
          </p>
          <p>
            <?= $note['body'] ?>
          </p>
      </div>
  </div>
</main>
 

