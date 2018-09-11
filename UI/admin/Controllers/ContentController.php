<?php

$activePage = NULL;

//Check Which Api to Run
switch ($apiName)
{
    case "Home" : $activePage = "Views/";
        break;
    
    case "Adminstration" : $activePage = "Views/Adminstration/";
        break;
    
    case "Enrollment" : $activePage = "Views/Enrollment/";
        break;
    
    default : $activePage = "Views/";
      break;
}

//Check Which Page to Show
if($page != NULL){
  switch ($page)
  {
    case "Dashboard": $activePage = $activePage . "Dashboard.php";
      break;
    
    case "AddNewStudent": $activePage = $activePage . "student/AddNewStudent.php";
      break;
    
    case "StudentList": $activePage = $activePage . "student/ViewStudentList.php";
      break;
    
    case "SearchStudent": $activePage = $activePage . "student/SearchStudent.php";
      break;
    
    case "UpdateStudent": $activePage = $activePage . "student/updatestudent.php";
      break;
    
    case "StudentProfile": $activePage = $activePage . "student/StudentProfile.php";
      break;
    
    
    default: $activePage = $activePage . "404.php";
      break;
  }  
}
  
else {
    $activePage = $activePage . "Dashboard.php";
}


require $activePage;