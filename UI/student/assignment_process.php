<?php
	include "../../database/db_connect.php";

	$sql = "SELECT `serial_id`, `course_title`, `teacher_name`, `submission_date`, `marks`
			FROM `assignments`
			WHERE `student_roll` = 'CSE-1576'";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	?>
    			<tr>
                  <td><?php echo $row["course_title"]; ?></td>
                  <td><?php echo $row["teacher_name"]; ?></td>
                  <td><?php echo $row["submission_date"]; ?></td>
                  <td><?php
                  		if($row["marks"] > 18 && $row["marks"] <= 20 ) echo "A+";
                  		
                  		else if($row["marks"] > 16 && $row["marks"] <= 18 ) echo "A";
                  		
                  		else if($row["marks"] > 14 && $row["marks"] <= 16 ) echo "A-";
                  		
                  		else if($row["marks"] > 12 && $row["marks"] <= 14 ) echo "B+";
                  		
                  		else if($row["marks"] > 10 && $row["marks"] <= 12 ) echo "B";
                  		
                  		else if($row["marks"] > 8 && $row["marks"] <= 10 ) echo "B-";
                  		
                  		else if($row["marks"] > 6 && $row["marks"] <= 8 ) echo "C+";
                  		
                  		else if($row["marks"] > 4 && $row["marks"] <= 6 ) echo "D";
                  		
                  		else if($row["marks"] > 2 && $row["marks"] <= 4 ) echo "E";
                  		
                  		else  echo "F";
                  		
                  	  ?></td>
                  <td><a href=<?php echo ""; ?>><button class="btn btn-info"> Details</button></a></td>
                </tr>
                <?php 
			    }
			}
			
?>