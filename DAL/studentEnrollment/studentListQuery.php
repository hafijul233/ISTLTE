<?php

function ViewStudentProfileList(){
  
  include '../../DAL/dbconnection.php';
  
  $InsertQuery = "SELECT `firstname`, `middlename`, `lastname`, `studenteducationinfo.`;";
  
      if ($connection->query($InsertQuery) === TRUE) {
        
        $RetriveStudentId = "SELECT `id` AS `studentid` FROM `studentprofileinfo` WHERE emailaddress = '$NewStudent->emailaddress' LIMIT 1;";
        
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $studentid = $row["studentid"];
          }
        } 
        else {
          echo $studentid = 0;
        }
        
      } 
      else {
        echo "<hr>Error: " . $InsertQuery . "<br>" . $connection->error;
        $studentid = -1;
      }
  return $studentid;
}
