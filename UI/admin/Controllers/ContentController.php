<?php

$activePage = NULL;

//Check Which Api to Run
if($apiName != NULL){
  switch ($apiName){
    case "Home" : $activePage = "Views/";
      break;
    
    case "Enrollment" : $activePage = "Views/Enrollment/";
      break;
    
    default :$activePage = "Views/";
      break;
  }
}

else{
  $activePage = NULL;
}

//Check Which Page to Show
if($page != NULL){
  switch ($page) {
    case "Dashboard": $activePage = $activePage . "Dashboard.php";
      break;
    
    case "AddNewStudent": $activePage = $activePage . "student/addnewstudent.php";
      break;
    
    case "StudentList": $activePage = $activePage . "student/viewstudentlist.php";
      break;
    
    case "SearchStudent": $activePage = $activePage . "student/searchstudent.php";
      break;
    
    case "UpdateStudent": $activePage = $activePage . "student/updatestudent.php";
      break;
    
    case "StudentProfile": $activePage = $activePage . "student/studentprofile.php";
      break;
    
    
    default: $activePage = $activePage . "404.php";
      break;
  }  
}
  
else{
    $activePage = $activePage . "Dashboard.php";
}


require $activePage;

//require 'Views/Dashboard.php';