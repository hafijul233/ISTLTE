<?php

  include '../../DAL/dbconnection.php';
  
$studentName = $_POST["studentName"];
$classRoll = $_POST["classRoll"];
$subjectName = $_POST["subjectName"];
$totalMarks = $_POST["totalMarks"];
$marksGot = $_POST["marksGot"];


$sql = "INSERT INTO `incoursemarksinfo`(`studentname`, `classroll`, `subjectname`, `totalmarks`, `marksreceive`)"
     . " VALUES ('$studentName', '$classRoll', '$subjectName', '$totalMarks', '$marksGot')";

if ($connection->query($sql) === TRUE) {
  header("Location: ../../UI/admin/index.php?api=ResultProcessor&page=EntryIncourse&done=1");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    die();
}

$connection->close();