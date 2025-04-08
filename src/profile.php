<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="output.css">
<link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css
">  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<div class="w-full min-h-screen mb-4 p-1 md:p-4 h-full bg-white  grid grid-cols-5">
<div class="bg-yellow-100 h-full p-2 items-center flex flex-col ">
<h1 class="flex mb-12"><img src="img/logo.svg" alt=""><span class="text-3xl md:block hidden">Educ</span></h1>
<ul class="flex flex-col gap-8  text-gray-700 font-bold">
<li class="gap-1 items-center hover:cursor-pointer transition duration-100 hover:text-blue-300  text-4xl md:text-xl flex"><i class="fa-solid fa-user"></i><a class="hidden md:block" href="index.php">Profile</a></li>
<li class="gap-1 items-center hover:cursor-pointer transition duration-100 hover:text-blue-300  text-4xl md:text-xl flex"><i class="fa-solid fa-house"></i><a class="hidden md:block" href="index.php">Home</a></li>
<li class="gap-1 items-center hover:cursor-pointer transition duration-100 hover:text-blue-300  text-4xl md:text-xl flex"><i class="fa-solid fa-book"></i><a class="hidden md:block" href="index.php">Courses</a></li>
<li class="gap-1 items-center hover:cursor-pointer transition duration-100 hover:text-blue-300  text-4xl md:text-xl flex"><i class="fa-solid fa-bookmark"></i><a class="hidden md:block" href="index.php">Bookmark</a></li>
<li class="mb-24 gap-1 items-center hover:cursor-pointer transition duration-100 hover:text-blue-300  text-4xl md:text-xl flex"><i class="fa-solid fa-gear"></i><a class="hidden md:block" href="index.php">Settings</a></li>
<li class="gap-1 items-center hover:cursor-pointer transition duration-100 hover:text-blue-300 text-4xl md:text-xl flex"><i class="fa-solid fa-right-from-bracket"></i><a class="hidden md:block" href="logout.php">Log Out</a></li>
</ul>
</div>

<div class="col-span-4 h-full  py-2 md:px-4">
<div class="w-full mb-4 relative h-28 overflow-hidden">
  <img class="w-full h-full mb-2.5 object-cover" src="img/ff.png" alt="">
  <form action="#" method="post">
  <i class="fa-solid fa-pen-to-square absolute right-1 top-1"></i>
<input type="hidden" value="" name="id" >
  </form>

</div>
<div class="w-full px-2 py-4 bg-indigo-500">
<div class="w-4/5 m-auto   p-2 flex relative  items-center gap-6">
<div class="w-16 h-16 border-4 border-red-400 overflow-hidden rounded-full">
<img class="rounded-full object-cover w-full h-full" src="img/signin.png" alt="">
</div>

<div class="flex text-gray-300 font-medium flex-col items-center gap-1.5">
  <p class="text-white">Ahmed rabar</p>
  <p >Student</p>
  
</div>
<div class="">
  <label class="flex text-white flex-col gap-1.5 items-center">
    Sexe:
    <p class="text-gray-300">Male</p>
  </label></div>
<div class="">
  <label class="flex text-white flex-col gap-1.5 items-center">
    joined since: 
    <p class="text-gray-300">2025</p>
  </label></div>
  <div class="flex text-white hover:text-yellow-300 transition-all duration-100  hover:cursor-pointer absolute right-10 to-10% gap-2 items-center">
  <p>Edite profile</p>
  <i class="fa-solid fa-pen-to-square"></i>

</div>
</div>

</div>
</div>
</div>


  
<?php include 'footer.php'; ?>
