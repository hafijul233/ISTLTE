<?php
if($apiName == NULL){
        include 'mainleftslidebar.php';
}
else{
    switch ($apiName){
        case "Enrollment":
            include 'enrollleftslidebar.php';
               break;

        default: include 'mainleftslidebar.php';
            break;
    }
}
?>