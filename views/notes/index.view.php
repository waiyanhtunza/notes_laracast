<?php require('../views/partials/head.php')?> 
<?php require('../views/partials/nav.php') ?>
<?php require('../views/partials/banner.php') ?>  
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
      
  </div>
</main>

<?php require('../views/partials/footer.php') ?>  

 

