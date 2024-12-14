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
        <a href="./index.php" class="flex items-center space-x-3">
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
          <li><a href="./index.php" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-blue-700 dark:hover:text-white">Home</a></li>
          <li><a href="./Client tableau.php" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-blue-700 dark:hover:text-white">Client List</a></li>
            <li><a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded-lg bg-blue-700 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-blue-700 dark:hover:text-white">Activite List</a></li>
            <li><a href="./reservations tableau.php" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-blue-700 dark:hover:text-white">Reservations List</a></li>
          </ul>
        </div>
        
      </div>
    </nav>
</section class="relative">

<div class="p-4 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3"> 

<div class="bg-gray-300 p-6 rounded-lg shadow-md">
    <h2 class="flex justify-center text-2xl font-bold mb-8">Ajouter une Activité</h2>
    <form action="add_activite.php" method="POST" class="space-y-4">
      <div>
        <label for="titre" class="block text-sm font-medium text-gray-700">Titre</label>
        <input type="text" id="titre" name="titre" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm" placeholder="Entrez le titre" required>
      </div>
      <div>
        <label for="destination" class="block text-sm font-medium text-gray-700">Destination</label>
        <input type="text" id="destination" name="destination" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm" placeholder="Entrez la destination" required>
      </div>
      <div>
        <label for="prix" class="block text-sm font-medium text-gray-700">Prix</label>
        <input type="number" id="prix" name="prix" step="0.01" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm" placeholder="Entrez le prix" required>
      </div>
      <div>
        <label for="date_debut" class="block text-sm font-medium text-gray-700">Date de Début</label>
        <input type="date" id="date_debut" name="date_debut" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm" required>
      </div>
      <div>
        <label for="date_fin" class="block text-sm font-medium text-gray-700">Date de Fin</label>
        <input type="date" id="date_fin" name="date_fin" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm" required>
      </div>
      <div>
        <label for="place_disponible" class="block text-sm font-medium text-gray-700">Places Disponibles</label>
        <input type="number" id="place_disponible" name="place_disponible" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm" placeholder="Nombre de places" required>
      </div>
      <div>
        <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Ajouter une Activité</button>
      </div>
    </form>
  </div>

<div class="col-span-1 md:col-span-2 bg-gray-300 p-6 rounded-lg shadow-md overflow-x-auto">
<h2 class="flex justify-center text-2xl font-bold mb-8">Liste des Activités</h2>
  <table class="w-full border-collapse border border-gray-400">
    <thead class="bg-black">
      <tr>
        <th class="text-white px-4 py-2">Titre</th>
        <th class="text-white px-4 py-2">Destination</th>
        <th class="text-white px-4 py-2">Prix</th>
        <th class="text-white px-4 py-2">Date Début</th>
        <th class="text-white px-4 py-2">Date Fin</th>
        <th class="text-white px-4 py-2">Places Disponibles</th>
      </tr>
    </thead>
    
    <tbody>
    <?php
            include ("db.php");
            $sql = "SELECT * FROM `activites`";
            $res = $conn -> query($sql);
            ?>
            <?php while ($row = $res -> fetch_assoc()):?>

      <tr class="hover:bg-blue-500">
        <td class="border border-gray-400 px-4 py-2"><?php echo $row ["titre"]?></td>
        <td class="border border-gray-400 px-4 py-2"><?php echo $row ["destination"]?></td>
        <td class="border border-gray-400 px-4 py-2"><?php echo $row ["prix"]?></td>
        <td class="border border-gray-400 px-4 py-2"><?php echo $row ["date_debut"]?></td>
        <td class="border border-gray-400 px-4 py-2"><?php echo $row ["date_fin"]?></td>
        <td class="border border-gray-400 px-4 py-2"><?php echo $row ["place_disponible"]?></td>
        </td>
      </tr>

      <?php endwhile 
      ?>

    </tbody>
  </table>
</div>
</div>
</body>
</html>
