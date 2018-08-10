<?php

include '../../DAL/dbconnection.php';
include '../../SETUP/configuration.php';
include '../functions/session.php';
include '../functions/helper.php';


$email = test_input($_POST["emailaddress"]);
$password = test_input($_POST["password"]);
$cachePermission = test_input($_POST["cache"]);


$sql = "SELECT `id` AS `profileId`, `categories` AS `UserCategory`, `status` "
     . "FROM `userauthenticationinfo` WHERE `emailaddress` = '$email'"
     . " AND `passwords` = '$password';";
    
$result = $connection->query($sql);    
    
if ($result->num_rows > 0){
    $userinfo = $result->fetch_assoc();   
    $userinfo["confirm"] = "Found"; 
} else {
    $userinfo["confirm"] = "Not Found";
}

if($userinfo["confirm"] == "Found" && $userinfo["status"] == 1){
    
    //$_SESSION["SuccessMessage"] = "User Found" . "ID: " . $userinfo["profileId"] . " Category: " . $userinfo["UserCategory"];
    
    $_SESSION["profileId"] = $userinfo["profileId"];
    $_SESSION["UserCategory"] = $userinfo["UserCategory"];
    
    $userCategory = $userinfo["UserCategory"];
       
    switch ($userCategory) {
        case $categories[0] : 
            $url = "../../UI/" . $categories[0] . "/index.php";
                redirect_to($url);    
                    break;
                    
        case $categories[1] : 
            $url = "../../UI/" . $categories[1] . "/index.php";
                redirect_to($url);    
                    break;
                    
        case $categories[2] : 
            $url = "../../UI/" . $categories[2] . "/index.php";
                redirect_to($url);    
                    break;
                    
        case $categories[3] : 
            $url = "../../UI/" . $categories[3] . "/index.php";
                redirect_to($url);    
                    break;
                    
        case $categories[4] : 
            $url = "../../UI/" . $categories[4] . "/index.php";
                redirect_to($url);    
                    break;
                    
        case $categories[5] : 
            $url = "../../UI/" . $categories[5] . "/index.php";
                redirect_to($url);    
                    break;
                    
        case $categories[6] : 
            $url = "../../UI/" . $categories[6] . "/index.php";
                redirect_to($url);    
                    break;
                    
        default: redirect_to("../../include/404.php");
            break;
    }
}
else if($userinfo['confirm'] == "Not Found"){
  $_SESSION["ErrorMessage"] ="User Account Not Matched.";
  redirect_to("../../index.php");
}
else{
    $_SESSION["WarnMessage"] = "Sorry Your Account is Suspended. ";
    redirect_to("../../index.php");
}

$connection->close();

