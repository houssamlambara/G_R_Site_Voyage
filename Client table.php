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
            Get started
          </button>
        </div>

        <!-- Navbar Links -->
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
          <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-black bg-black">
          <li><a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-blue-700 dark:hover:text-white">Home</a></li>
          <li><a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-blue-700 dark:hover:text-white">About</a></li>
            <li><a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-blue-700 dark:hover:text-white">Services</a></li>
            <li><a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-blue-700 dark:hover:text-white">Contact</a></li>
          </ul>
        </div>
        
      </div>
    </nav>

</section class="relative">

  <!-- Sidebar -->
   
  <aside id="logo-sidebar" class="absolute w-64 h-full bg-black transition-transform " aria-label="Sidebar">
  <div class="h-full px-3 py-4 overflow-y-auto">
    <ul class="space-y-2 font-medium">
      <li><a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-blue-700 group"><span class="ms-3">Dashboard</span></a></li>
      <li><a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-blue-700 group"><span class="ms-3">Kanban</span></a></li>
      <li><a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-blue-700 group"><span class="ms-3">Inbox</span></a></li>
      <li><a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-blue-700 group"><span class="ms-3">Users</span></a></li>
      <li><a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-blue-700 group"><span class="ms-3">Products</span></a></li>
    </ul>
  </div>
</aside>

<!-- Tableau des Clients -->
<div class="bg-gray-300 p-6 rounded-lg shadow-md">
  <h2 class="text-2xl font-bold mb-4">Liste des Clients</h2>
  <table class="w-full border-collapse border border-gray-400">
    <thead class="bg-gray-200">
      <tr>
        <th class="border border-gray-400 px-4 py-2">Nom</th>
        <th class="border border-gray-400 px-4 py-2">Prénom</th>
        <th class="border border-gray-400 px-4 py-2">Email</th>
        <th class="border border-gray-400 px-4 py-2">Téléphone</th>
        <th class="border border-gray-400 px-4 py-2">Adresse</th>
        <th class="border border-gray-400 px-4 py-2">Date de Naissance</th>
        <th class="border border-gray-400 px-4 py-2">Actions</th>
      </tr>
</thead>
    
    <tbody>

    <?php
            include ("db.php");
            $sql = "SELECT * FROM `clients`";
            $res = $conn -> query($sql);
            ?>
            <?php while ($row = $res -> fetch_assoc()):?>

      <tr class="hover:bg-gray-100">
        <td class="border border-gray-400 px-4 py-2"><?php echo $row ["nom"]?></td>
        <td class="border border-gray-400 px-4 py-2"><?php echo $row ["prenom"]?></td>
        <td class="border border-gray-400 px-4 py-2"><?php echo $row ["email"]?></td>
        <td class="border border-gray-400 px-4 py-2"><?php echo $row ["telephone"]?></td>
        <td class="border border-gray-400 px-4 py-2"><?php echo $row ["adresse"]?></td>
        <td class="border border-gray-400 px-4 py-2"><?php echo $row ["date_naissance"]?></td>
        </td>
      </tr>

      <?php endwhile 
      ?>

    </tbody>
  </table>
</div>
