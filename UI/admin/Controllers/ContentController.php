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
    
    case "ResultProcessor" : $activePage = "Views/ResultProcessor/";
        break;
      
    default : $activePage = "Views/";
      break;
}

//Check Which Page to Show
if($page != NULL){
  switch ($page)
  {
    case "Dashboard" : $activePage .= "Dashboard.php";
      break;
    
    case "AddNewStudent" : $activePage .= "student/AddNewStudent.php";
      break;
    
    case "StudentList" : $activePage .= "student/ViewStudentList.php";
      break;
    
    case "SearchStudent" : $activePage .= "student/SearchStudent.php";
      break;
    
    case "UpdateStudent" : $activePage .= "student/UpdateStudent.php";
      break;
    
    case "StudentProfile" : $activePage .= "student/StudentProfile.php";
      break;
    
    case "EnrollConfirmation" : $activePage .= "student/EnrollmentConfirmation.php";
      break;
    
    case "UserProfile" : $activePage .= "student/StudentProfile.php";
      break;
    
    case "Assignment" : $activePage .= "Show/Assignment.php";
      break;
    
    case "Incourse" : $activePage .= "Show/Incourse.php";
      break;
    
    case "MidTerm" : $activePage .= "Show/MidTerm.php";
      break;
    
    case "Final" : $activePage .= "Show/FinalExam.php";
      break;
    
    case "EntryAssignment" : $activePage .= "Entry/Assignment.php";
      break;
    
    case "EntryIncourse" : $activePage .= "Entry/Incourse.php";
      break;
    
    case "EntryMidTerm" : $activePage .= "Entry/MidTerm.php";
      break;
    
    case "EntryFinal" : $activePage .= "Entry/FinalExam.php";
      break;
    
    default: $activePage .= "404.php";
      break;
  }  
}
  
else {
    $activePage = $activePage . "Dashboard.php";
}


require $activePage;