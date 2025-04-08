<?php
session_start();
$errors=[];
if(isset($_SESSION['errors'])&& !empty($_SESSION['errors'])){
  $errors=$_SESSION['errors'];}
  
  $email=$_SESSION['email']??"";
  unset($_SESSION['email']);
  unset($_SESSION['errors']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">  <link rel="stylesheet" href="output.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="flex mb-4 justify-center flex-col  sm:w-md w-full p-2    m-auto mt-2 items-center">
<h1 class="flex mb-4"><img src="img/logo.svg" alt=""><span class="text-3xl">Educ</span></h1>

<div class="w-full md:w3/5 border-2 border-b-black px-2 py-4 rounded-2xl shadow-2xl m-auto flex items-center flex-col">
<h1 class="mb-4 font-bold text-gray-900 text-2xl ">Sign in</h1>
<ul>
  <?php foreach ($errors as $error) { ?>

<li class="text-red-300"><?=htmlspecialchars($error)??'' ?></li>
<?php } ?></ul>
<form class="sm:w-11/12 w-full flex  flex-col px-2" method="post" action="signin.php">

<label class="flex relative gap-1 mb-4 flex-col"  for="email">Email:
  <img class="w-4 absolute left-1.5  top-11" src="img/ff.png" alt="">

  <input type="email" name="email" value="<?php $email??'' ?>" class="px-8 rounded-2xl  py-2 focus:outline-0 border border-gray-400" id="email" placeholder="Enter your email....">
</label>
<label class="flex relative gap-1 mb-4 flex-col" for="pwd">Password:  
  <img class="w-3 absolute left-1.5  top-10" src="img/Vector.png" alt="">

  <input type="password" name="pwd" class="px-8 rounded-2xl py-2 focus:outline-0 border border-gray-400" id="pwd" placeholder="Choose a password">
</label>


<button class="bg-blue-400 transition-all duration-200 mb-4 rounded-2xl border-0 px-8 py-2 font-medium cursor-pointer hover:bg-blue-500 text-white ">Sign in</button>
<p class="m-auto">Don't have an account? <a class="text-blue-300  underline font-medium" href="sign_up.php">Sign up</a></p>
</form>

</div>
<a class="underline font-medium text-blue-400 text-2xl cursor-pointer hover:text-blue-600 transition-all duration-150 " href="index.php">Back Home</a>
</div></body>
</html>