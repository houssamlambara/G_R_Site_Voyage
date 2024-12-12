<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

   <!-- Header -->
    <nav class="bg-black">
      <div class=" max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        
        <!-- Logo -->
        <a href="#" class="flex items-center space-x-3">
          <img src="./youcode_logo_dark.png" class="h-8" alt="Logo" />
        </a>
        
        <!-- Right Action Buttons -->
        <div class="flex md:order-2 space-x-3">
          <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Get started</button>
        </div>

        <!-- Navbar Links -->
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
          <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-black bg-black">
          <li><a href="./index.php" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-blue-700 dark:hover:text-white">Home</a></li>
          <li><a href="./Client tableau.php" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-blue-700 dark:hover:text-white">Client List</a></li>
            <li><a href="./activite tableau.php" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-blue-700 dark:hover:text-white">Activite List</a></li>
            <li><a href="#" class="block py-2 px-3 md:p-0 text-gray-900 bg-blue-700 rounded-lg hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-blue-700 dark:hover:text-white">Reservations List</a></li>
          </ul>
        </div>
        
      </div>
    </nav>
</section class="relative">

<div class="p-4 grid grid-cols-3 gap-6"> 

<!-- Ajouter Activité -->
<div class="bg-gray-300 p-6 rounded-lg shadow-md">
    <h2 class="flex justify-center text-2xl font-bold mb-8">Ajouter une Reservation</h2>
    <form action="add_activite.php" method="POST" class="space-y-4">
      <div>
        <label for="client" class="block text-sm font-medium text-gray-700">Client</label>
        <select id="client" name="client" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm" required>
          <option value="">Sélectionner un client</option>
          
        </select>
      </div>
      
      <div>
        <label for="activite" class="block text-sm font-medium text-gray-700">Activité</label>
        <select id="activite" name="activite" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm" required>
          <option value="">Sélectionner une activité</option>
          
        </select>
      </div>

      <!-- Status -->
      <div>
        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
        <input type="text" id="status" name="status" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm" placeholder="Entrez le status" required>
      </div>

      <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Ajouter une Reservation</button>
      </form>
</div>

<!-- Tableau des reservations -->

<div class="col-span-2 bg-gray-300 p-6 rounded-lg shadow-md">
<h2 class="flex justify-center text-2xl font-bold mb-8">Liste des Reservations</h2>
  <table class="w-full border-collapse border border-gray-400">
    <thead class="bg-gray-200">
      <tr>
        <th class="border border-gray-400 px-4 py-2">Client</th>
        <th class="border border-gray-400 px-4 py-2">Activite</th>
        <th class="border border-gray-400 px-4 py-2">Date de Reservation </th>
        <th class="border border-gray-400 px-4 py-2">Status</th>
      </tr>
</thead>