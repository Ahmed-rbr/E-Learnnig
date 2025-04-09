<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="output.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css
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
<li class="gap-1 items-center hover:cursor-pointer transition duration-100 hover:text-blue-300 text-4xl md:text-xl flex"><i class="fa-solid fa-right-from-bracket"></i>
<form action="logout.php"><button><a class="hidden md:block" href="logout.php">Log Out</a>
</button></form>


</li>
</ul>
</div>