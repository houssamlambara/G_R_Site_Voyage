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
            Get started</button>
        </div>

        <!-- Navbar Links -->
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
          <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-black bg-black">
          <li><a href="./index.php" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-blue-700 dark:hover:text-white">Home</a></li>
          <li><a href="#" class="block py-2 px-3 md:p-0 text-gray-900 bg-blue-700 rounded-lg hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-blue-700 dark:hover:text-white">Client List</a></li>
            <li><a href="./activite tableau.php" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-blue-700 dark:hover:text-white">Activite List</a></li>
            <li><a href="./reservations tableau.php" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-blue-700 dark:hover:text-white">Reservations List</a></li>
          </ul>
        </div>
        
      </div>
    </nav>

<div class="p-4 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3"> 

  <div class="col-span-1 bg-gray-300 p-6 rounded-lg shadow-md">
    <h2 class="flex justify-center text-2xl font-bold mb-8">Ajouter un Client</h2>
    <form action="add_client.php" method="POST" class="space-y-4">
      <div>
        <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
        <input type="text" id="nom" name="nom" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Entrez le nom" required>
      </div>
      <div>
        <label for="prenom" class="block text-sm font-medium text-gray-700">Prénom</label>
        <input type="text" id="prenom" name="prenom" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Entrez le prénom" required>
      </div>
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Entrez l'email" required>
      </div>
      <div>
        <label for="telephone" class="block text-sm font-medium text-gray-700">Téléphone</label>
        <input type="tel" id="telephone" name="telephone" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Entrez le numéro de téléphone" required>
      </div>
      <div>
        <label for="adresse" class="block text-sm font-medium text-gray-700">Adresse</label>
        <textarea id="adresse" name="adresse" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Entrez l'adresse" required></textarea>
      </div>
      <div>
        <label for="date_naissance" class="block text-sm font-medium text-gray-700">Date de Naissance</label>
        <input type="date" id="date_naissance" name="date_naissance" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
      </div>
      <div>
        <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Ajouter un Client</button>
      </div>
    </form>
  </div>

  <div class="col-span-1 md:col-span-2 bg-gray-200 p-6 rounded-lg shadow-md overflow-x-auto">
    <h2 class="flex justify-center text-2xl font-bold mb-8">Liste des Clients</h2>
    <div>
      <table class="w-full border-collapse border border-gray-400">
        <thead class="bg-black">
          <tr>
            <th class="border border-white text-white px-4 py-2">Nom</th>
            <th class="border border-white text-white px-4 py-2">Prénom</th>
            <th class="border border-white text-white px-4 py-2">Email</th>
            <th class="border border-white text-white px-4 py-2">Téléphone</th>
            <th class="border border-white text-white px-4 py-2">Adresse</th>
            <th class="border border-white text-white px-4 py-2">Date de Naissance</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include ("db.php");
            $sql = "SELECT * FROM `clients`"; 
            $res = $conn -> query($sql);
            while ($row = $res -> fetch_assoc()): ?>
            <tr class="hover:bg-blue-500">
              <td class="border border-white px-4 py-2"><?php echo $row["nom"] ?></td>
              <td class="border border-white px-4 py-2"><?php echo $row["prenom"] ?></td>
              <td class="border border-white px-4 py-2"><?php echo $row["email"] ?></td>
              <td class="border border-white px-4 py-2"><?php echo $row["telephone"] ?></td>
              <td class="border border-white px-4 py-2"><?php echo $row["adresse"] ?></td>
              <td class="border border-white px-4 py-2"><?php echo $row["date_naissance"] ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</body>
</html>
