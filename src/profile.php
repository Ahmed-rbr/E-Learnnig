<?php 
session_start();
$user = $_SESSION['user'] ?? '';
$err = $_SESSION['error'] ?? '';
include_once 'navbar.php';
if($user) {
?>

<div class="col-span-4 relative h-full py-2 md:px-4">
<div class="w-full px-2 py-4 relative bg-cover bg-center" style="background-image: url('<?= $user['background'] ?>');">
    <i class="fa-solid editPro fa-pen-to-square hover:text-yellow-300 text-2xl transition-all duration-100 hover:cursor-pointer absolute top-1 right-1"></i>
    <div class="w-4/5 m-auto flex-wrap p-2 flex relative justify-between items-center gap-6">
      <div class="w-16 h-16 border-4 border-red-400 overflow-hidden rounded-full">
        <img class="rounded-full object-cover w-full h-full" src="<?=$user['avatar']?>" alt="">
      </div>

      <div class="flex text-gray-300 font-medium flex-col items-center gap-1.5">
        <p class="text-white"><?= $user['username']?></p>
        <p><?= $user['role']?></p>
      </div>
      
      <div>
        <label class="flex text-white flex-col gap-1.5 items-center">
          Sexe:
          <p class="text-gray-300"><?= $user['sexe']?></p>
        </label>
      </div>
      
      <div>
        <label class="flex text-white flex-col gap-1.5 items-center">
          Joined since: 
          <p class="text-gray-300">2025</p>
        </label>
      </div>
    </div>
  </div>

  <div class="updtePro hidden fixed inset-0 bg-black bg-opacity-50 z-50  items-center justify-center">
    <div class="bg-amber-50 min-w-[300px] max-w-md border-2 border-black shadow-2xl px-4 py-4 relative">
      <i class="fa-solid cancelPro absolute right-3 top-3 text-xl hover:cursor-pointer transition-all font-bold fa-xmark"></i>
      
      <form class="flex w-full flex-col gap-4 p-3" action="update.php" method="post">
      <?php if (!empty($err)): ?>
  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4">
    <?= htmlspecialchars($err) ?>
  </div>
<?php endif; ?>

        <label class="flex gap-2 flex-col">
          Username:
          <input class="w-full border-2 px-4 py-2 border-black" type="text" value="<?= $user['username']?>" name="username">
        </label>
        <input type="hidden" name="id" value="<?=$user['id']??''?>">
        <label class="flex gap-2 flex-col">
          Sexe:
          <select class="w-full border-2 border-black px-4 py-2" name="sexe">
            <option value="Unknown" <?= $user['sexe'] == 'Unknown' ? 'selected' : '' ?>>Unknown</option>
            <option value="Male" <?= $user['sexe'] == 'Male' ? 'selected' : '' ?>>Male</option>
            <option value="Female" <?= $user['sexe'] == 'Female' ? 'selected' : '' ?>>Female</option>
          </select>
        </label>
        
        <label class="flex gap-2 flex-col">
          Avatar:
          <select class="w-full border-2 border-black px-4 py-2" name="avatar">
          <option value="<?= $user['avatar']?? '' ?>">default</option>

          <option value="img/user1">avatar 1</option>
          <option value="img/user2.png">avatar 2</option>
          <option value="img/user3">avatar 3</option>
          </select>        </label>
          <label class="flex gap-2 flex-col">
          background:
          <select class="w-full border-2 border-black px-4 py-2" name="background">
          <option value="<?= $user['background']?? '' ?>">default</option>
          <option value="img/bk1.jpg">blue bg</option>
          <option value="img/bk2.jpg">red bg</option>
          <option value="img/bk3.jpg">yelow bg</option>
          </select>        </label>
        
        <button class="bg-blue-400 px-4 hover:cursor-pointer py-2 font-medium text-white hover:bg-blue-500 transition-colors">
          Update
        </button>
      </form>
    </div>
  </div>
</div>

<?php 
  include 'footer.php';
} else {
  header('Location: index.php');
  exit;
}
?>