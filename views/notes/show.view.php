<?php require('../views/partials/head.php')?> 
<?php require('../views/partials/nav.php') ?>
<?php require('../views/partials/banner.php') ?>   
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <div>
          <p class="my-4">
            <a href="/notes" class="underline text-sky-600 text-lg font-bold" > <= ... go back</a>
          </p>
          <p>
            <?= htmlspecialchars($note['body']) ?>
          </p>

          <form action="" method="POST" class="my-4">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button type="submit" class="text-xs text-red-600/[0.8] bg-gray-400 rounded-2xl w-20 h-6 hover:bg-red-600 hover:text-white a" >Delete Note</button>
          </form>

      </div>
  </div>
</main>
 
<?php require('../views/partials/footer.php') ?>  

  