<?php

if($page != null){

	switch($page){
		
    case 'dashboard':
			require_once 'dashboard.php';
				break;
	
    case 'profile':
			require_once 'profile.php';
				break;

    case 'profile_update':
			require_once 'profile_update.php';
				break;

    case 'notice':
			require_once 'notice.php';
				break;

	case 'assignments':
			require_once 'assignment.php';
				break;

	case 'class_test':
			require_once 'class_test.php';
				break;

	case 'mid_terms':
			require_once 'mid_terms.php';
				break;

	case 'final_terms':
			require_once 'final_terms.php';
				break;
				
    case 'report_marks':
			require_once 'report_marks.php';
				break;
				
    case 'setting':
			require_once 'setting.php';
				break;
				
    case 'documentation':
			require_once 'documentation.php';
				break;
				
    default :		
      require_once '404.php';
				break;
	}
}

else{
	
	require_once 'dashboard.php';
}

?>