<?php
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($request_uri !== '/' && $request_uri !== '/index.php') {
    http_response_code(404);
    include __DIR__ . '/404.php';
    exit;
}

require_once('./templates/header.php');
require_once('./templates/sidebar.php');
?>

<section class="bg-gray-100 dark:bg-neutral-800 p-10 rounded-lg mb-5">
  <ol class="flex items-center whitespace-nowrap">
    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200" aria-current="page">
      Home
    </li>
  </ol>

  <hr class="border-gray-300 my-3">
  
  <p class="dark:text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, veritatis doloremque. Autem, quas! Ipsa nulla corporis laborum deserunt, officiis blanditiis qui. Velit, ad commodi architecto quam delectus accusantium dolor tempora?</p>
</section>

<?php
require_once('./templates/footer.php');
?>