
<?php


include_once('db_config.php');



$message = '';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = :email";
    $pre_sql = $connexion->prepare($sql);
    $pre_sql->execute(['email' => $email]);
    $user = $pre_sql->fetch();
    if($user['email'])
    {
        $_SESSION['email_not_exist'] = '';

        if($user && password_verify($password, $user['password'])) 
        {

            $_SESSION['email_not_exist'] = 'Email non reconnue';
            
            if($user['admin']==1)
            {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                header('Location: admin.php');
            }
            else
            {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                header('Location: dashbord_vendeur.php');
             }
        } 
        else
        {
            if($_POST['password']!=null)
            {
                $_SESSION['password_incorrect'] = 'Mot de passe incorrect';
                // echo "ok";
                // echo $_POST['password'];
                
            }
        }
    }
    else
    {
        $_SESSION['email_not_exist'] = 'Email non reconnue';
    }

    
}



?>






<!doctype html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
   <meta http-equiv="X-UA-Compatible" content="ie=edge" />
   <title>Sign in</title>
   <link rel="stylesheet" href="../style.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
   <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
   <section class="bg-gray-50 ">
      <div class="flex flex-row items-center   mx-auto md:h-screen lg:py-0">
         <div class=" flex flex-col justify-center w-1/2 items-center h-full py-8 bg-gray-800 " id="landing">
            <span class="text-4xl font-bold text-white mb-10">Welcome Back!</span> 
         </div>
       <div class=" flex justify-center items-center w-1/2 h-full ">
       
          <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0   ">
              <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                  <h1 class="text-xl font-bold leading-tight tracking-tight text-blue-700 md:text-2xl ">
                      Sign in to your account
                  </h1>
                  <form class="space-y-4 md:space-y-6" method="post" action="">
                      <div>
                          <label for="email" class="block mb-2 text-sm font-medium text-gray-900   ">Your email</label>
                          <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="name@company.com" required="">
                          <span class="text-xs text-red-600"><?php echo $_SESSION['email_not_exist']; ?></span>
                      </div>
                      <div>
                          <label for="password" class="block mb-2 text-sm font-medium text-gray-900   ">Password</label>
                          <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                      </div>
                      <div class="flex items-center justify-between">
                          <div class="flex items-start">
                              <div class="flex items-center h-5">
                              </div>
                              <div class="ml-3 text-sm">
                              <span class="text-xs text-red-600"><?php echo$_SESSION['password_incorrect']; ?></span>
                              </div>
                          </div>
                          <a href="#" class="text-sm font-medium text-primary-600 hover:underline text-white">Forgot password?</a>
                      </div>
                      <input type="submit" value="Envoyer" name="send" class="w-full text-white bg-blue-700 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center">
                      <p class="text-sm  font-light text-gray-900 ">
                         <span class="mr-2"> Don't have an account yet? </span><a href="inscription.php" class="font-medium text-blue-700 hover:underline ">Sign up</a>
                      </p>
                  </form>
              </div>
          </div>
       </div>  
            
      </div>
    </section>
</body>

</html>
