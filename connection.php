<?php

/*$db_host = "dreamboxdatabank.com"; 

$db_username = "dreambox_user";  

$db_pass = "thili@123";  

$db_name = "dreambox_residential"; 
*/

$db_host = "localhost"; 

$db_username = "root";  

$db_pass = "";  

$db_name = "residential"; 

$conn = mysqli_connect($db_host , $db_username , $db_pass , $db_name);

// Check connection
if (!$conn) {
echo "error";
   // die("Connection failed: " . mysqli_connect_error());
}
else{


}

?>