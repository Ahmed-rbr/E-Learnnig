<?php
 require_once 'db.php';
 session_start();
 $errors=[];


if($_SERVER['REQUEST_METHOD']==='POST')
{
 $email=trim($_POST['email']);
 $pwd=trim($_POST['pwd']);
  if(empty($email)||empty($pwd)){
$errors[]='please fill all fildes';
  }

if (!empty($errors)) {
  $_SESSION['errors'] = $errors;
  $_SESSION['email'] = $email; 
  header('Location: sign_in.php');
  exit;
}


 try{

  $query='SELECT * from users where email=:email';
  $stmt=$pdo->prepare($query);
  $stmt->execute([':email'=>$email]);
  $result=$stmt->fetch();


if($result){
  $stored_pwd=$result['pwd'];
if(password_verify($pwd,$stored_pwd)){
 header('Location: profile.php');
$_SESSION['user']=$result;
exit();
}else{
  $errors[]='password incorect';
}
  }
else{  $errors[] = 'Email not found';



}
}
 catch(PDOException $e){
  error_log('Database Error: ' . $e->getMessage());
  $errors[] = 'An error occurred. Please try again later.';exit();
}
$_SESSION['errors'] = $errors;
$_SESSION['email'] = $email; 
header('Location: sign_in.php');
exit;
}

