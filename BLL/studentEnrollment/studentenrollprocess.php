<?php

  include '../../DAL/dbconnection.php';
  include '../functions/validation.php';
  
  $firstName = filtertext($_POST["firstName"]);
  $middleName = filtertext($_POST["middleName"]);
  $lastName = filtertext($_POST["lastName"]);
  $firstName = filtertext($_POST["firstName"]);
    [profilePic] => 37786625_2192880977612049_958577876595113984_n.jpg
    [emailAddress] => hafijul233@gmail.com
    [contactNo] => +8801710534092
    [bloodGroup] => O+
    [birthDate] => 
    [gender] => male
    [presentAddress] => ghfgh
    [presentPhoneNo] => +8801710534092
    [permanentAddress] => ghjghj
    [permanentPhoneNo] => +8801710534092
    [fatherName] => mustak
    [fatherProfession] => businssess
    [motherName] => hamida
    [motherProfession] => house wife
    [postAddress] => fghfgh
    [phoneNo] => 11 No
    [department] => CS
    [course] => CSE
    [session] => 2014 - 2015
    [semester] => 7
    [classRoll] => 1576
    [RegistrationNo] => dfgdfg
  echo "<pre>";
print_r($_GET);
echo "</pre>";
?>