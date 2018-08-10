<?php
$activePage = NULL;

//Check Which Api to Run
if($apiName != NULL){
  switch ($apiName){
    case "Home" : $activePage = "";
      break;
    
    case "Enrollment" : $activePage = "enrollment/";
      break;
    
    default :$activePage = "";
      break;
  }
}

else{
  $activePage = NULL;
}

//Check Which Page to Show
if($page != NULL){
  switch ($page) {
    case "Dashboard": $activePage = $activePage . "dashboard.php";
      break;
    
    case "AddNewStudent": $activePage = $activePage . "student/addnewstudent.php";
      break;
    
    case "StudentList": $activePage = $activePage . "student/viewstudentlist.php";
      break;
    
    case "SearchStudent": $activePage = $activePage . "student/searchstudent.php";
      break;
    
    case "UpdateStudent": $activePage = $activePage . "student/updatestudent.php";
      break;
    
    
    default: $activePage = $activePage . "404.php";
      break;
  }  
}
  
else{
    $activePage = $activePage . "dashboard.php";
}


require $activePage;
