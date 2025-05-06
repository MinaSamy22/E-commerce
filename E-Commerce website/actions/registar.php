<?php
// 1-law das submit fa da5ali data
 session_start();
 require_once("../helpers/validation.php");
 require_once("../helpers/json.php");
 require_once("../helpers/auth.php");



if (isset($_POST['submit'])){


$name = $_POST ['name'] ;
$email = $_POST ['email'] ;
$age = $_POST ['age'] ;
$password = $_POST ['password'] ;
$confirmPassword = $_POST ['confirmPassword'] ;




//2- validation



$errors['name'] = validateName($name);
$errors['email'] = validateEmail($email);
$errors['age'] = validateAge($age);
$errors['password'] = validatePassword($password ,$confirmPassword);

//if no errors n5zn fe json

if (cheakErrorBagIsEmpty($errors)){
      $user = [
'name'=> $name,
'age' => $age,
'email' => $email,
'password' => $password,

    ];



    $_SESSION ['name'] =$name;
    $storedUser = storeJson($user, "../data/users.json"); // استدعاء الفنكشن بتاعت حفظ الداتا الي عملتها تحت

    storeUserInSession($user);
    
    header("location: ../index.php"); //rediriction to welcome page

}else {
    // يعني دخل حاجة غلط
    header("location: ../registar.php");
}

//لو داس علطول
}else {
    echo"please supmit form first";
}
