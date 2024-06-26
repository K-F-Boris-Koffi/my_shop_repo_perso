<?php

session_start();


if(!isset($_POST['send']))
{
    session_destroy();
}

?>




<!doctype html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
   <meta http-equiv="X-UA-Compatible" content="ie=edge" />
   <title>Sign up</title>
   <link rel="stylesheet" href="../style.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
   <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
   <section class="bg-gray-50 ">
      <div class="flex flex-row items-center   mx-auto md:h-screen lg:py-0">
         <div class=" flex flex-col justify-center w-1/2 items-center h-full py-8 bg-gray-800 " id="landing1">
            <span class="text-4xl font-bold text-white mb-10 " id="text1">Become a new seller!</span> 
         </div>
       <div class=" flex justify-center items-center w-1/2 h-full ">
       
          <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0   ">
              <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                  <h1 class="text-xl font-bold leading-tight tracking-tight text-blue-700 md:text-2xl ">
                      Sign up to get account
                  </h1>
                  <form class="space-y-4 md:space-y-6" method="post" action="traitement.php">
                        <div>
                            <label for="user_name" class="block mb-2 text-sm font-medium text-gray-900   ">Your username</label>
                            <input type="text" name="user_name" id="user_name" value="<?php echo $_SESSION['user_name'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "  required="">
                            <span class="text-xs text-red-600"><?php echo $_SESSION['user_get_name']; ?></span>
                        </div> 
                        
                        <div>
                          <label for="email" class="block mb-2 text-sm font-medium text-gray-900   ">Your email</label>
                          <input type="email" name="email" id="email" value="<?php echo $_SESSION['email'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="name@company.com" required="">
                          <span class="text-xs text-red-600"><?php echo $_SESSION['email_exist']; ?></span>
                      </div>
                      <div>
                          <label for="password" class="block mb-2 text-sm font-medium text-gray-900   ">Password</label>
                          <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                      </div>
                      
                      <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900   ">Password confirmation</label>
                        <input type="password" name="password_verify" id="password_verify" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                        <span class="text-xs text-red-600"><?php echo $_SESSION['password_non_conforme']; ?></span>
                     </div>
                      <input name="send" type="submit" class="w-full text-white bg-blue-700 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center">
                      
                  </form>
              </div>
          </div>
       </div>  
            
      </div>
    </section>
</body>

</html>


