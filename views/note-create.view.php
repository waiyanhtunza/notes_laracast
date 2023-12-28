<?php require('partials/head.php')?> 
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>  
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
     
      
<form method="post">
  <div class="space-y-12">
    <div class="">
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="col-span-full">
          <label for="about" class="block text-2xl font-medium leading-6 text-gray-900">Body</label>
          <div class="mt-2">
            <textarea id="about" name="body" placeholder="Add new note idea!!" rows="3" class="block w-1/2 h-40 rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-500 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-500 sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6 w-1/2">
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>

  </div>
</main>
 

