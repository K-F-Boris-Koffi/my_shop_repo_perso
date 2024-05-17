
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





<!-- component -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POC WCS</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body class="bg-gray-200">
    

    <!-- Sidebar -->
    <aside>
        <div id="sideNav" class="lg:block hidden bg-white w-64 h-screen fixed rounded-none border-none">
            <div class="items-center justify-center flex p-4">
                <h1 class="text-lg uppercase font-medium text-center">Welcome <br/> <span class="text-blue-700 "><?php echo $user['username'] ?></span></h1>
            </div>
              <div id="profile" class="flex w-30 h-30 ">
                <img
                  src="https://images.unsplash.com/photo-1628157588553-5eeea00af15c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                  alt="Avatar user"
                  class="rounded-full p-6"
                />
              </div>
            <!-- Items -->
            <div class="p-4 space-y-4 h-screen">
                <!-- Inicio -->
                <a href="admin.html" aria-label="dashboard"
                    class="relative px-4 py-3 flex items-center space-x-4 rounded-lg text-white bg-blue-700 from-sky-600 to-cyan-400">
                    <span class="material-symbols-outlined">
                        apartment
                        </span>
                    <span class="">
                        Dashboad
                        </span>
                </a>
                
                <a href="users.html" class="px-4 py-3 flex items-center space-x-4 rounded-md group">
                    <span class="material-symbols-outlined">
                        group
                        </span>
                    <span>Users</span>
    
                </a>
                <a href="produits.html" class="px-4 py-3 flex items-center space-x-4 rounded-md group">
                    <span class="material-symbols-outlined">
                        inventory
                        </span>
                    <span>Produits</span>
                </a>
                <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md group">
                    <span>Price</span>
                </a>
                <div class="">
                    <a href="deconnexion.php" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:fill-blue-700" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg>
                        <span class="group-hover:text-blue-700">Logout</span>
                    </a>
                </div>
                
            </div>
        </div>
    </aside>
    

    <div class="lg:ml-64 lg:pl-4 lg:flex lg:flex-col lg:w-75% mt-5 mx-2">

        <!-- Input Search-->
        <div class="bg-white rounded-full p-3 mb-4 shadow-md">
            <div class="flex items-center">
                <i class="px-3 fas fa-search ml-1"></i>
                <input type="text" placeholder="Search..." class="ml-3 border-none w-full ">
            </div>
        </div>

        <!-- Number user product category -->
        <div class="lg:flex grid grid-col-4 items-stretch">
            
            <div class="bg-white md:p-2 p-6 rounded-lg border border-gray-200 mb-4 lg:mb-0 shadow-md lg:w-[35%]">
                <div class="flex justify-center items-center space-x-5 h-full">
                    <div>
                        <p>Users Numbers</p>
                        <h2 class="text-4xl font-bold text-gray-600">50.365</h2>
                        <p>25.365</p>
                    </div>
                    <img src="images/users.svg" alt="wallet"
                        class="h-24 md:h-20 w-38">
                </div>
            </div>
            <div class="bg-white md:p-2 p-6 rounded-lg border border-gray-200 mb-4 lg:mb-0 shadow-md lg:w-[35%]">
                <div class="flex justify-center items-center space-x-5 h-full">
                    <div>
                        <p>Products Numbers</p>
                        <h2 class="text-4xl font-bold text-gray-600">50.365</h2>
                        <p>25.365</p>
                    </div>
                    <img src="images/users.svg" alt="wallet"
                        class="h-24 md:h-20 w-38">
                </div>
            </div>
            <div class="bg-white md:p-2 p-6 rounded-lg border border-gray-200 mb-4 lg:mb-0 shadow-md lg:w-[35%]">
                <div class="flex justify-center items-center space-x-5 h-full">
                    <div>
                        <p>Cate Numbers</p>
                        <h2 class="text-4xl font-bold text-gray-600">50.365</h2>
                        <p>25.365</p>
                    </div>
                    <img src="images/users.svg" alt="wallet"
                        class="h-24 md:h-20 w-38">
                </div>
            </div>
                <!-- Modal Add User -->
                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" id="btn" class="text-2xl lg:mb-0 shadow-md lg:w-[35%] font-medium block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Add Users
                </button>
                <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Create User
                                </h3>
                                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5">
                                <form class="space-y-4" action="createUsers.php" method="POST">
                                    <div>
                                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                        <input type="text" name="username" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name..." required />
                                    </div>
                                    <div>
                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
                                    </div>
                                    <div>
                                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                                    </div>
                                    <div>
                                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                                        <input type="text" name="admin" id="admin" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                                    </div>
                                    
                                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Valider</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                 
                
        </div>

    </div>   
</body>

</html>