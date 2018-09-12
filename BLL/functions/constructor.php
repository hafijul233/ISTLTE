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


