<?php

function gpa($total, $mark){
  $point = ($mark * 100)/$total;
  
  if($point <= 100 && $point >= 80) $grade = "A+";
  if($point < 80 && $point >= 75) $grade = "A";
  if($point < 75 && $point >= 70) $grade = "A-";
  if($point < 70 && $point >= 65) $grade = "B+";
  if($point < 65 && $point >= 60) $grade = "B";
  if($point < 60 && $point >= 55) $grade = "B-";
  if($point < 55 && $point >= 50) $grade = "C+";
  if($point < 50 && $point >= 45) $grade = "C";
  if($point < 45 && $point >= 40) $grade = "D";
  if($point < 40 && $point >=0) $grade = "F";
 
return $grade;
}

function pointcalc($point){
  
  if($point <= 100 && $point >= 80) $grade = 4.00;
  if($point < 80 && $point >= 75) $grade = 3.75;
  if($point < 75 && $point >= 70) $grade = 3.50;
  if($point < 70 && $point >= 65) $grade = 3.25;
  if($point < 65 && $point >= 60) $grade = 3.00;
  if($point < 60 && $point >= 55) $grade = 2.75;
  if($point < 55 && $point >= 50) $grade = 2.50;
  if($point < 50 && $point >= 45) $grade = 2.25;
  if($point < 45 && $point >= 40) $grade = 2.00;
  if($point < 40 && $point >=0) $grade = 0.00;

  return $grade;
}
function gradepoint($cse321,$cse322,$cse323,$cse324,$cse325,$cse326,$cse327,$cse328){
  $totalcreadit = 19.5;
  $creadits = array(3,1.5,3,3,1.5,3,1.5,3);
  $points = array();
  array_push($points, pointcalc($cse321)*)
  
  
}
