<?php

function ErrorMessage(){
    
    if(isset($_SESSION["ErrorMessage"])){
      
      $output = "<div class=\"alert alert-danger\">" . htmlentities($_SESSION["ErrorMessage"]) . "</div>";
      
      $_SESSION["ErrorMessage"] = null;
      
      return $output;
    }
    
  }
  
  function SuccessMessage(){
    
    if(isset($_SESSION["SuccessMessage"])){
      
      $output = "<div class=\"alert alert-success\">" . htmlentities($_SESSION["SuccessMessage"]) . "</div>";
      
      $_SESSION["SuccessMessage"] = null;
      
      return $output;
    }
    
  }
  
  function WarnMessage(){
    
    if(isset($_SESSION["WarnMessage"])){
      
      $output = "<div class=\"alert alert-warning\">" . htmlentities($_SESSION["WarnMessage"]) . "</div>";
      
      $_SESSION["WarnMessage"] = null;
      
      return $output;
    }
    
  }

