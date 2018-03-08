<?php
include('connection.php');

if(isset($_POST['signup'])){    
 
	$new=mysqli_query($conn,"SELECT Nacc from users WHERE NIC='$_POST[UID]'; ") ;
	$row=mysqli_fetch_array($new);
 
	mysqli_query($conn, "UPDATE accomadation SET emp_nic=NULL");
	mysqli_query($conn, "UPDATE house SET emp_nic=NULL");

	$new  = mysqli_query($conn, "DELETE FROM users WHERE NIC='$_POST[UID]';");
	$new2 = mysqli_query($conn, "DELETE FROM mark_table WHERE nic = '$_POST[UID]';"); 

	if ((!$new)||(!$new2)) {
		die('Could not get data: ' . mysqli_error());
	}  
  
	echo "<h3 align='center'>"."Deleted successfully"."</h3>"; 
    echo "<a align='center' href='admin_details.php'>"."<b align='center'><< Back</b>"."</a>";      
   }

mysqli_close($conn); 
   
?>    