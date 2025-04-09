<?php  session_start();

$user=$_SESSION['user']??'';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="output.css">
  </head>
  <body class="font-mono absolute bg-gray-200">
    <header class=" bg-indigo-500 text-lg">
<nav class="w-full  md:flex-row flex-col  fixed  bg-indigo-500 z-10  text-white text-lg font-semibold m-auto md:px-6 p-4 mb-6 flex items-center justify-between">
<div class="flex md:w-fit  justify-between w-full">
<h1 class="flex"><img src="img/logo.svg" alt=""><span class="text-3xl">Educ</span></h1>

  <img class="md:hidden font-extrabold brg bg-white rounded-2xl" src="img/menu.svg" alt="">
</div>
<ul class="hidden md:flex menu1 md:flex-row flex-col  items-center m-3  gap-12 justify-between">
<li class="hover:text-yellow-300 transform hover:scale-115 transition-all duration-200 ease-in-out "><a href="#">Home</a></li>
<li class="hover:text-yellow-300 transform hover:scale-115 transition-all duration-200 ease-in-out "><a href="#">Courses</a></li>
<li class="hover:text-yellow-300 transform hover:scale-115 transition-all duration-200 ease-in-out  "><a href="#">Mentores</a></li>
<li class="hover:text-yellow-300 transform hover:scale-115 transition-all duration-200 ease-in-out "><a href="#">About</a></li>
<li class="hover:text-yellow-300 transform hover:scale-115 transition-all duration-200 ease-in-out "><a href="#">Contact</a></li>


</ul>
<?php if($user){ ?>
  <button class="hover:bg-white hidden md:flex menu2 hover:text-black text-base rounded-2xl transition hover:cursor-pointer duration-200 ease-out bg-white px-2 py-1"><a  class="flex gap-2" href="profile.php"><img class="h-8 w-8 objict-cover  rounded-full" src="<?=$user['avatar']?>" alt=""> <p class="text-xl text-black  uppercase"><?=$user['username'][0]?></p></a></button>

<?php }else{?>
  <div class="hidden menu2 md:flex gap-4">

<button class="hover:bg-white hover:text-black text-base rounded-3xl transition hover:cursor-pointer duration-200 ease-out bg-yellow-300 px-4 py-2"><a href="sign_in.php">Sign in</a></button>
</div>
<?php } ?>

</nav>

    

 