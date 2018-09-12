<?php

$activePage = NULL;

//Check Which Api to Run
switch ($apiName)
{
    case "Home" : $activePage = "Views/";
        break;
    
    case "Administration" : $activePage = "Views/Administration/";
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
    
    case "AddNewStudent": $activePage .= "student/AddNewStudent.php";
      break;
    
    case "StudentList": $activePage .= "student/ViewStudentList.php";
      break;
    
    case "SearchStudent": $activePage .= "student/SearchStudent.php";
      break;
    
    case "UpdateStudent": $activePage .= "student/UpdateStudent.php";
      break;
    
    case "StudentProfile": $activePage .= "student/StudentProfile.php";
      break;
    
    case "EnrollConfirmation": $activePage .= "student/EnrollmentConfirmation.php";
      break;
    
    case "UserProfile": $activePage .= "student/StudentProfile.php";
      break;
    
    default: $activePage = $activePage . "404.php";
      break;
  }  
}
  
else {
    $activePage = $activePage . "Dashboard.php";
}


require $activePage;