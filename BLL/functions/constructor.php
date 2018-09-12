<?php

function generateEmailAddress($firstName, $middleName, $course, $classRoll){
  $emailaddress = NULL;
  if(strlen($middleName) > 0){
    $emailaddress = $middleName . $course . $classRoll . "@ist.edu.bd";
  }
  else{
    $emailaddress = $firstName . $course . $classRoll . "@ist.edu.bd";
  }
  return $emailaddress;  
}

function GeneratePassword()
{
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $randstring = '';
    for ($i = 0; $i < 10; $i++) {
        $randstring .= $characters[rand(0, strlen($characters))];
    }

    return $randstring;
}


