<?php
$page = $_GET["page"];
if($page != null){

	switch($page){
		
    case 'dashboard':
			reqViewsre_once 'dashboard.php';
				break;
	
    case 'profile':
			reqViewsre_once 'profile.php';
				break;

    case 'profile_update':
			reqViewsre_once 'profile_update.php';
				break;

    case 'notice':
			reqViewsre_once 'notice.php';
				break;

	case 'assignments':
			reqViewsre_once 'assignment.php';
				break;

	case 'class_test':
			reqViewsre_once 'class_test.php';
				break;

	case 'mid_terms':
			reqViewsre_once 'mid_terms.php';
				break;

	case 'final_terms':
			reqViewsre_once 'final_terms.php';
				break;
				
    case 'report_marks':
			reqViewsre_once 'report_marks.php';
				break;
				
    case 'setting':
			reqViewsre_once 'setting.php';
				break;
				
    case 'documentation':
			reqViewsre_once 'documentation.php';
				break;
				
    default :		
      reqViewsre_once '404.php';
				break;
	}
}

else{
	
	reqViewsre_once 'dashboard.php';
}

?>