<?php

include '../../DAL/dbconnection.php';
  
  $sql = "SELECT `emailaddress`, `passwords`, `categories` FROM `userauthenticationinfo` "
       . "WHERE `profileid` = 12 ORDER BY `profileid` DESC LIMIT 1;";
  
  $result = $connection->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "email adddress : " . $row["emailaddress"]. " - Password: " . $row["passwords"]. " " . $row["categories"]. "<br>";
    }
} else {
    echo "0 results";
}