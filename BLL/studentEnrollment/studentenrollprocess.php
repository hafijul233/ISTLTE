<?php

  include '../../DAL/dbconnection.php';
  include '../../DAL/studentEnrollment/studentEnrollQuery.php';
  include '../functions/validation.php';
  include '../functions/validation.php';
  include '../functions/contructor.php';
  
  
  $firstName = filtertext($_POST["firstName"]);
  $middleName = filtertext($_POST["middleName"]);
  $lastName = filtertext($_POST["lastName"]);
  
  $profilePic = ["profilePic"];
  
  $emailAddress = emailvalidation($_POST["emailAddress"]);
  $contactNo = phonevalidation($_POST["cntactNo"]);
  $bloodHroup = filtertext($_POST["bloodGroup"]);
  $birthDate = filtertext($_POST["birthDate"]); 
  $gender = filtertext($_POST["gender"]);
  $presentAddress = filtertext($_POST["persentAddress"]);
  $presentPhoneNo = phonevalidation($_POST["presentPhoneNo"]);
  $permanentAddress = filtertext($_POST["permanentAddress"]);
  $permanentPhoneNo = phonevalidation($_POST["permanentPhoneNo"]);
  
  $fatherName = filtertext($_POST["fatherName"]);
  $fatherProfession = filtertext($_POST["fatherProfession"]);
  
  $motherName = filtertext($_POST["motherName"]);
  $motherProfession = filtertext($_POST["motherProfession"]);
  
  $postAddress = filtertext($POST["postAddress"]);
  $phoneNo = phonevalidation($_POST["phoneNo"]);
  
  $department = filtertext($_POST["department"]);
  $course = filtertext($_POST["course"]);
  $session = filtertext($_POST["session"]);
  $semester = filtertext($_POST["session"]);
  $classRoll = classrollvalidation($_POST["classRoll"]);
  $registrationNo = registrationvalidation($_POST["registrationNo"]);
  
  
  
?>