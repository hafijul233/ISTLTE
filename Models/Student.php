<?php
class Education {
  
public $id;
public $studentid;
public $admissiondate;
public $batchno;
public $department;
public $course;
public $session;
public $semseter;
public $classroll;
public $registrationno;
public $status;
public $comments;

}

class Parents extends Education{
  
public $id;
public $studentid;
public $fathername;
public $fatherprofession;
public $fatherspicture;
public $mothername;
public $motherprofession;
public $motherpicture;
public $postaddress;
public $phoneno;
public $emailaddress;
public $gurdianname;
public $relationwithstudent;
public $gurdianphoneno;
public $gurdianpicture;
public $status;
public $comments;
}

class Profile extends Parents{

public $id;
public $studentid;
public $firstname;
public $middlename;
public $lastname;
public $profilepicture;
public $emailaddress;
public $contactNo;
public $bloodgroup;
public $birthdate;
public $gender;
public $presentaddress;
public $presentphoneno;
public $permanentaddress;
public $permanentphoneno;
public $status;
public $comments;

public function GetFullname($firstName, $middleName, $lastName){
  $fullName = $firstName . " " . $middleName . " " . $lastName;
  return $fullName;
}

public function GetAcessname($middleName, $lastName){
  $acessName = $middleName . " " . $lastName;
  return $acessName;
}

}

