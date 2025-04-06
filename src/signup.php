<?php
require_once 'db.php';
session_start();
$errors=[];
$_SESSION['errors']=[];
if($_SERVER['REQUEST_METHOD']==='POST'){
  $email=trim($_POST['email']);
  $username=trim($_POST['username']);
  $pwd=trim($_POST['pwd']);
  $pwd_check=trim($_POST['pwd_check']);
  function notEmptyInputs($username,$email,$pwd,$pwd_check,&$errors) {
    
    if (empty($username)||empty($email)||empty($pwd)||empty($pwd_check)) {
      $errors= "Must fill all inputs";
    }
  
  }
  notEmptyInputs($username,$email,$pwd,$pwd_check,$errors);

  function checkEmail($email){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    
   
      $errors[]='Enter valide email';
    }
    }
    checkEmail($email);
  function checkUsername($username,&$errors){
    $pattern = '/^[a-zA-Z0-9_]{6,24}$/';
    if (strlen($username) < 6) {
      $errors[]= "Username must be at least 6 characters long";
  }
  
  if (strlen($username) > 24) {
    $errors[]= "Username cannot exceed 24 characters";
  }
  
  if (!preg_match($pattern, $username)) {
    $errors[]= "Username can only contain letters, numbers, and underscores";
  }
      
      }
      checkUsername($username,$errors);
function confirmPwd($pwd,$pwd_check,&$errors){

if($pwd!==$pwd_check){
  $errors[]= "You must enter the same password";

}
}
confirmPwd($pwd,$pwd_check,$errors);
function usedEmail($email,$pdo,&$errors){

try{
$sql='SELECT email from users where email=:email';
$stmt=$pdo->prepare($sql);
$stmt->execute([':email'=>$email]);
$result=$stmt->fetch();
}
catch(PDOException $e){
error_log('error connection'.$e->getMessage());
}
if($result){
  $errors[]= "This email allready  used";

}
}
usedEmail($email,$pdo,$errors);

function usedUsername($username,$pdo,&$errors){

  try{
  $sql='SELECT username from users where username=:username';
  $stmt=$pdo->prepare($sql);
  $stmt->execute([':username'=>$username]);
  $result=$stmt->fetch();
  }
  catch(PDOException $e){
  error_log('error connection'.$e->getMessage());
  }
  if($result){
    $errors[]= "This username allready  used";
  
  }
  return true;
  }
  usedUsername($username,$pdo,$errors);



  if(empty($errors)){
    $pwd=password_hash($pwd,PASSWORD_DEFAULT);
    try{
$pdo->beginTransaction();
$stmt=$pdo->prepare('INSERT into users (username,email,pwd) values(:username,:email,:pwd)');
$stmt->execute([':username'=> $username,':email'=> $email,':pwd'=>$pwd]);

$pdo->commit();
header('Location: index.php');
exit();
unset($_SESSION['errors']);
    }
    catch(PDOException $e){
$pdo->rollBack();
error_log("Transaction failed: " . $e->getMessage());

header('Location: sign_up.php');
exit();    }
  }else{
$_SESSION['errors']=$errors;
header('Location: sign_up.php');
exit();
  }



}