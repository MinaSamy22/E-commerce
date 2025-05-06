<?php
//name
function validateName($name): ?string
{
      $error = null;

    if (empty($name)){
        $error = "name is required";
    }
    elseif(! is_string($name) || is_numeric($name)){
        $error = "name must be text";
    }
elseif(strlen($name)>255) {
    $error = "name mustn't exceed 255 character";
}

return $error;
}


//email
function validateEmail($email): ?string
{
    $error = null;

    if (empty($email)){
        $error = "email is required";
    }
    elseif(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $error = "email must be text";
    }
elseif(strlen($email)>256){
    $error = "email mustn't exceed 255 character";
}
return $error;
}

//age
function validateAge($age): ?string
{
    $error = null;

    if(is_numeric($age)){
       $age = (int) $age;
    }

    if (!empty($age)){
        if(! is_int($age)){
            $error = "Age must be integer";}

         elseif(($age<0)){
    $error = "age must >=0";
         }
}
return $error;
}


function validatePassword($password,$confirmPassword)
{
    $error = null;
    $passwordLength =strlen($password);

    if (empty($password)){
        $error = "password is required";
    }
    elseif(! is_string($password))  {
        $error = "password must be text";
    }
    elseif( $passwordLength < 5 || $passwordLength > 30)  {
        $error = "password must btween 5-30 char";
    }

    elseif($password != $confirmPassword){
        $error = "password must be same to the confirmation";
    }
return $error;
}

function validatePasswordForLogin($password)
{
    $error = null;
    $passwordLength =strlen($password);

    if (empty($password)){
        $error = "password is required";
    }
    elseif(! is_string($password))  {
        $error = "password must be text";
    }
    elseif( $passwordLength < 5 || $passwordLength > 30)  {
        $error = "password must btween 5-30 char";
    }

   
return $error;
}












function validateImage(array $image) :?string 
{
$error = null;
$sizeBite = $image['size'];
$sizeMB = $image['size']/1024**2;

//if ($image ['error'] != 0) {        //e3ne enta md5lt4 sora
//$error = "image is required";


if (explode("/",$image['type'])[0] != "image") {     //bt2kd an d5l sora 
    $error = "file must be an image";
}
elseif($sizeMB>1){
    $error = "image shoud less than 1 mb";

}
return $error;
}

function cheakErrorBagIsEmpty(array $errors): bool
{
foreach ($errors as $key => $value) {
    if($value !== null)  {
      return false;
    }
}

return true;
}