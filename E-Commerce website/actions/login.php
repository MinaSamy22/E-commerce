<?php
  // 1-law das submit fa da5ali data
   session_start();
   require_once("../helpers/validation.php");
   require_once("../helpers/json.php");
   require_once("../helpers/auth.php");
  
  
  
  if (isset($_POST['submit'])){
  
    $email = $_POST ['email'] ;
  $password = $_POST ['password'] ;
  
  //2- validation
 
  $errors['email'] = validateEmail($email);
  $errors['password'] = validatePasswordForLogin($password);
  
  //if no errors n5zn fe json
  
  if (cheakErrorBagIsEmpty($errors)){
    $allUsers = json_decode (file_get_contents("../data/users.json") ,true);
    
  foreach($allUsers as $user){
    if($user['email'] == $email and $user['password'] ==$password){
        storeUserInSession($user);
        header("location: ../index.php"); //rediriction to welcome page
    } else {
        header("location: ../login.php");
  }
        
}  
  
  }else {
      // يعني دخل حاجة غلط
      header("location: ../login.php");
  }
  
  //لو داس علطول
  }else {
    header("location: ../login.php");
    ;
  }