<?php
  include '../../DAL/dbconnection.php';
  
$studentName = $_POST["studentName"];
$classRoll = $_POST["classRoll"];
$CSE321 = $_POST["CSE321"];
$CSE322 = $_POST["CSE322"];
$CSE323 = $_POST["CSE323"];
$CSE324 = $_POST["CSE324"];
$CSE325 = $_POST["CSE325"];
$CSE326 = $_POST["CSE326"];
$CSE327 = $_POST["CSE327"];
$CSE328 = $_POST["CSE328"];



$sql = "INSERT INTO `midterminfofor6`(`studentname`, `classroll`, `CSE-321`, `CSE-322`, "
     . "`CSE-323`, `CSE-324`, `CSE-325`, `CSE-326`, `CSE-327`, `CSE-328`)"
     . " VALUES ('$studentName','$classRoll',$CSE321,$CSE322,$CSE323,$CSE324,$CSE325,$CSE326,$CSE327,$CSE328)";

if ($connection->query($sql) === TRUE) {
  header("Location: ../../UI/admin/index.php?api=ResultProcessor&page=EntryMidTerm&done=1");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    die();
}

$connection->close();