<?php
$errors = array();

function filtertext($string)
{
  $string = trim($string);
  $string = stripslashes($string);
  $string = htmlspecialchars($string);
  
  return $string;
}


function namevalidation($name)
{
  $name = filtertext($name);
  
  if(preg_match("/^[a-zA-Z ]*$/",$name)){
    return $name;
  }
}

function emailvalidation($email)
{
  $email = filtertext($email);
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return $email;
  }
}

function phonevalidation($phone)
{
  $phone = filtertext($phone);
  
  //
    return $phone;
  //}
}

function classrollvalidation($roll)
{
  $roll = filtertext($roll);
  
  //if(preg_match("/[0-9]{4} | [0-9]{4}$/", $roll)) {
    return $roll;
 // }
}

function registrationvalidation($regno)
{
  $regno = filtertext($regno);
  
  return $regno;
  
}