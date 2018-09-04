<?php

include '../../DAL/dbconnection.php';
include '../../SETUP/configuration.php';
include '../functions/session.php';
include '../functions/helper.php';
include '../functions/validation.php';


$email = filtertext($_POST["emailaddress"]);
$password = filtertext($_POST["password"]);
$cachePermission = filtertext($_POST["cache"]);


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
    
    $_SESSION["profileId"] = $userinfo["profileId"];
    $_SESSION["UserCategory"] = $userinfo["UserCategory"];
    
    $userCategory = $userinfo["UserCategory"];
       
    switch ($userCategory) {//$categories will be found in Configuration.php
        case $categories["admin"] : 
            $url = "../../UI/" . $categories["admin"] . "/index.php";
                redirect_to($url);    
                    break;
                    
        case $categories["teacher"] : 
            $url = "../../UI/" . $categories["teacher"] . "/index.php";
                redirect_to($url);    
                    break;
                    
        case $categories["employee"] : 
            $url = "../../UI/" . $categories["employee"] . "/index.php";
                redirect_to($url);    
                    break;
                    
        case $categories["parent"] : 
            $url = "../../UI/" . $categories["parent"] . "/index.php";
                redirect_to($url);    
                    break;
                    
        case $categories["student"] : 
            $url = "../../UI/" . $categories["student"] . "/index.php";
                redirect_to($url);    
                    break;
                    
        default: redirect_to("../../include/404.php");
            break;
    }
}
else if($userinfo["confirm"] == "Found" && $userinfo["status"] != 1){
    $_SESSION["WarnMessage"] = "Sorry Your Account is Suspended. ";
    redirect_to("../../index.php");   
}
else{
    $_SESSION["ErrorMessage"] ="User Account Not Matched.";
  redirect_to("../../index.php");
}

$connection->close();

