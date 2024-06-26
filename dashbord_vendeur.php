
<?php

session_start();

// Vérifier si l'utilisateur est connecté
if(!isset($_SESSION['user_id'])) 
{
    header('Location: connexion.php');
    exit;
}



include_once('db_config.php');

$sql = "SELECT username FROM users WHERE id = :user_id";
$pre_sql = $connexion->prepare($sql);
$pre_sql->execute(['user_id' => $_SESSION['user_id']]);
$user = $pre_sql->fetch();



?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Acueil</title>
</head>

<body>
    <aside
        class="ml-[-100%] fixed z-10 top-0 pb-3 px-6 w-full flex flex-col justify-between h-screen border-r bg-white transition duration-300 md:w-4/12 lg:ml-0 lg:w-[25%] xl:w-[20%] 2xl:w-[15%]">
        <div>
            <div class="mt-8 text-center">
                <img src="assets/profil.jpeg" alt="" class="w-10 h-10 m-auto rounded-full object-cover lg:w-28 lg:h-28">
                <h5 class="hidden mt-4 text-xl font-semibold text-gray-600 lg:block"><?php echo $user['username'] ?></h5>
                <span class="hidden text-gray-400 lg:block">Vendeur</span>
            </div>

            <ul class="space-y-2 tracking-wide mt-8">
                <li>
                    <a href="#" aria-label="dashboard"
                        class="relative px-4 py-3 flex items-center space-x-4 rounded-xl text-white bg-gradient-to-r from-sky-600 to-blue-700">
                        <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z"
                                class="fill-current text-cyan-400 dark:fill-slate-600"></path>
                            <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z"
                                class="fill-current text-cyan-200 group-hover:text-cyan-300"></path>
                            <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z"
                                class="fill-current group-hover:text-sky-300"></path>
                        </svg>
                        <span class="-mr-1 font-medium">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="./produits.html" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path class="fill-current text-gray-300 group-hover:text-cyan-300" fill-rule="evenodd"
                                d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z"
                                clip-rule="evenodd" />
                            <path class="fill-current text-gray-600 group-hover:text-cyan-600"
                                d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
                        </svg>
                        <span class="group-hover:text-gray-700">Mes produits</span>
                    </a>
                </li>
                <li>
                    <a href="./commandes.html" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path class="fill-current text-gray-600 group-hover:text-cyan-600" fill-rule="evenodd"
                                d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                clip-rule="evenodd" />
                            <path class="fill-current text-gray-300 group-hover:text-cyan-300"
                                d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                        </svg>
                        <span class="group-hover:text-gray-700">Mes commandes</span>
                    </a>
                </li>
                <li>
                    <a href="./fournisseurs.html" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path class="fill-current text-gray-600 group-hover:text-cyan-600"
                                d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z" />
                            <path class="fill-current text-gray-300 group-hover:text-cyan-300"
                                d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z" />
                        </svg>
                        <span class="group-hover:text-gray-700"> Mes fournisseurs</span>
                    </a>
                </li>
                <li>
                    <a href="./parametres.html" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                            <span class="material-symbols-outlined hover:text-cyan-600">
                            settings
                            </span>
                        <span class="group-hover:text-gray-700">Parametres</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="px-6 -mx-6 pt-4 flex justify-between items-center border-t">
            <button class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span class="group-hover:text-gray-700"><a href="deconnexion.php">Logout</a></span>
            </button>
        </div>
    </aside>


    <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
        <div class="z-10 top-0 h-16 border-b bg-white lg:py-2.5">
            <div class="px-6 flex items-center justify-between space-x-4 2xl:container">
                <h5 hidden class="text-2xl text-gray-600 font-medium lg:block">Dashboard</h5>
            </div>
        </div>
       <div class="flex flex-row gap-5  items-center m-5">
            <div class=" flex w-2/5 border-t-8 border-gray-700 shadow-lg justify-center items-center">
                <div class="inline-block mt-3">
                    <div class="inline-flex gap-1">
                        <span class="material-symbols-outlined text-sky-700 bg-sky-100 " >inventory</span>
                        <span>Stock</span>
                    </div>
                    <h1 class="text-4xl font-bold">335</h1>
                </div>
            </div>
            <div class=" flex w-2/5 border-t-8 border-gray-700 shadow-lg justify-center items-center">
                <div class="inline-block mt-3">
                    <div class="inline-flex gap-1">
                        <span class="material-symbols-outlined text-sky-700 bg-sky-100 " >inventory</span>
                        <span>Vente</span>
                    </div>
                    <h1 class="text-4xl font-bold">1200</h1>
                </div>
            </div>
            <div class=" flex w-2/5 border-t-8 border-gray-700 shadow-lg justify-center items-center">
                <div class="inline-block mt-3">
                    <div class="inline-flex gap-1">
                        <span class="material-symbols-outlined text-sky-700 bg-sky-100 " >inventory</span>
                        <span>Stock</span>
                    </div>
                    <h1 class="text-4xl font-bold">335</h1>
                </div>
            </div>
            
       </div>

    </div>
</body>

</html>