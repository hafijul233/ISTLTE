<?php

  include '../../DAL/studentEnrollment/studentInsertQuery.php';
  include '../functions/validation.php';
  include '../functions/session.php';
  include '../../Models/Student.php';
  include '../../Setup/configuration.php';
  
  $firstName = filtertext($_POST["firstName"]);
  $middleName = filtertext($_POST["middleName"]);
  $lastName = filtertext($_POST["lastName"]);
  
  $profilePicName = basename($_FILES["profilePic"]["name"]);
  
  $emailAddress = emailvalidation($_POST["emailAddress"]);
  $contactNo = phonevalidation($_POST["contactNo"]);
  $bloodGroup = filtertext($_POST["bloodGroup"]);
  $birthDate = filtertext($_POST["birthDate"]); 
  $gender = filtertext($_POST["gender"]);
  $presentAddress = filtertext($_POST["presentAddress"]);
  $presentPhoneNo = phonevalidation($_POST["presentPhoneNo"]);
  $permanentAddress = filtertext($_POST["permanentAddress"]);
  $permanentPhoneNo = phonevalidation($_POST["permanentPhoneNo"]);
  
  $fatherName = filtertext($_POST["fatherName"]);
  $fatherProfession = filtertext($_POST["fatherProfession"]);
  
  $motherName = filtertext($_POST["motherName"]);
  $motherProfession = filtertext($_POST["motherProfession"]);
  
  $postAddress = filtertext($_POST["postAddress"]);
  $phoneNo = phonevalidation($_POST["phoneNo"]);
  
  $guardianName = filtertext($_POST["guardianName"]);
  $guardianContactNo = filtertext($_POST["guardianContactNo"]);
  $relationWithStudent = filtertext($_POST["relationWithStudent"]);
  
  $department = filtertext($_POST["department"]);
  $course = filtertext($_POST["course"]);
  $session = filtertext($_POST["session"]);
  $semester = filtertext($_POST["semester"]);
  $classRoll = classrollvalidation($_POST["classRoll"]);
  $registrationNo = registrationvalidation($_POST["registrationNo"]);
  
//initializing a Student Object
  $NewStudent = new Profile();
  
//Information for Profile Table
  $NewStudent->firstname = $firstName;
  $NewStudent->middlename = $middleName;
  $NewStudent->lastname = $lastName;
  $NewStudent->profilepicture = $profilePicName;
  $NewStudent->emailaddress = $emailAddress;
  $NewStudent->contactNo = $contactNo;
  $NewStudent->bloodgroup = $bloodGroup;
  $NewStudent->birthdate = $birthDate;
  $NewStudent->gender = $gender;
  $NewStudent->presentaddress = $presentAddress;
  $NewStudent->presentphoneno = $presentPhoneNo;
  $NewStudent->permanentaddress = $permanentAddress;
  $NewStudent->permanentphoneno = $permanentPhoneNo;
  $NewStudent->comments = "User: " . $NewStudent->GetFullname($firstName, $middleName, $lastName) . " by Admin Name: " . $developerName;
  
//Information for Education Table
  $NewStudent->department = $department;
  $NewStudent->course = $course;
  $NewStudent->session = $session;
  $NewStudent->semseter = $semester;
  $NewStudent->classroll = $classRoll;
  $NewStudent->registrationno = $registrationNo;
  
//Information for Parents Table
  $NewStudent->fathername = $fatherName;
  $NewStudent->fatherprofession = $fatherProfession;
  $NewStudent->mothername = $motherName;
  $NewStudent->motherprofession = $motherProfession;
  $NewStudent->gurdianname = $guardianName;
  $NewStudent->gurdianphoneno = $guardianContactNo;
  $NewStudent->relationwithstudent = $relationWithStudent;
  $NewStudent->postaddress = $postAddress;
  $NewStudent->phoneno = $phoneNo;

  //Send data To Student profile Table 
  $NewStudent->studentid = InsertIntoStudentProfileInfo($NewStudent);
  
  if($NewStudent->studentid == 0){
    echo 'No Student Found';
  }
  else if($NewStudent->studentid == -1){
    echo 'Insert Query Failed';
  }
  else{
    //Send data To Student Education Table 
  $confirm =InsertIntoStudentEducationInfo($NewStudent);
    
    if($confirm == 1){
      $confirm = InsertIntoStudentParentsInfo($NewStudent);
      
      if(confirm == 1){
        $confirm = InsertIntoUserAuthenticationInfo($NewStudent->emailaddress, $NewStudent->studentid, $NewStudent->comments);
      
        if(confirm == 1){
          
        }
      }
    }
  }
  
?>