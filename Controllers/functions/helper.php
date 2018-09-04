<?php

    $categories = array(
    "admin" => "admin",
    "teacher" => "teacher",
    "employee" => "employee",
    "parent" => "parent",
    "student" => "stundent"
    );
    
  function redirect_to($url) {
        header("Location: " . $url);
  }
  
  function category_label($category){
      switch ($category) {
        case $categories["admin"] : 
          $CategoryName = strtoupper("administration");
            break;
                    
        case $categories["teacher"] : 
          $CategoryName = strtoupper("teacher");
            break;
                    
        case $categories["employee"] : 
          $CategoryName = strtoupper("employee");
            break;
                    
        case $categories["parent"] : 
          $CategoryName = strtoupper("gurdian");
            break;
                    
        case $categories["student"] : 
          $CategoryName = strtoupper("student");
            break;
                    
        default:
          $CategoryName = strtoupper("unknown");
            break;
    } 
    return $categoryName;
  }
