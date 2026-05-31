<?php
require_once('./templates/header.php');
require_once('./templates/sidebar.php');
?>

<section class="bg-gray-100 dark:bg-neutral-800 p-10 rounded-lg">
  <ol class="flex items-center whitespace-nowrap">
    <li class="inline-flex items-center">
      <a href="./product-create-list.php" class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500">
        Manage Products
      </a>
      <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="m9 18 6-6-6-6"></path>
      </svg>
    </li>
    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200" aria-current="page">
      Edit Product
    </li>
  </ol>

  <hr class="border-gray-300 my-3">

  <?php
  $id = $_GET['row_id'];
  $sql = "SELECT * FROM products WHERE id = $id";
  $query = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($query);
  ?>

  <form action="product-update.php" method="post">
    <div class=" flex gap-3">
      <input type="hidden" name="row_id" value="<?= $row['id'] ?>" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
      <input type="text" name="name" value="<?= $row['name'] ?>" required class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
      <input type="text" name="price" value="<?= $row['price'] ?>" required class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
      <input type="number" name="stock" value="<?= $row['stock'] ?>" required class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
      <button class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Update</button>
    </div>
  </form>
</section>

<?php
require_once('./templates/footer.php');
?>