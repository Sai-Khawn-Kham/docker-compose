<?php
require_once('./db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WAD Shop</title>
  <link rel="stylesheet" href="./css/app.css">
</head>

<body class="bg-white dark:bg-neutral-700">
  <main class="max-w-[1000px] mx-auto p-10">

    <header class="flex gap-x-2 items-center mb-4">
      <!-- Navigation Toggle -->
      <div class="lg:hidden text-center">
        <button type="button" class="p-1 inline-flex justify-center items-center gap-x-2 text-start text-sm font-medium align-middle focus:outline-hidden" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-sidebar-offcanvas" aria-label="Toggle navigation" data-hs-overlay="#hs-sidebar-offcanvas">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <!-- End Navigation Toggle -->
      <a href="./index.php" class="text-3xl font-serif font-bold dark:text-white">Backend Projects</a>
    </header>