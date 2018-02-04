<?php
//$name = $_POST['AdID'];
//$password = $_POST['Adpw'];

/*$servername = "localhost";
$username = "root";
$password = "";
$DB_error = "Error in connecting DB";
$dbName="Residential";

//$con = mysql_Connect($host_Name,$user_Name,$password) or 
//die($DB_error. mysql_error() );
//$con = mysql_Connect($host_Name,$user_Name,$password) or 
//$conn = mysqli_connect($servername, $username, $password);
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
*/



if(empty($_POST['UID'])||empty($_POST['Upw']))
   {
  echo "<h2 align= 'center'>"."Please Provide ID and Password!"."</h2>";
  return false;
   }
   else{
    include('connection.php');

$ses_sql = mysqli_query($conn,"SELECT* FROM users where nic = '$_POST[UID]' && password='$_POST[Upw]'; ") ;

$num_rows = mysqli_num_rows($ses_sql);

mysqli_close($conn);

if ($num_rows==1) {
    
        header("Location: user_details.php");
    } else {
       // header("Location: admin.html");
        echo "<h2 align= 'center'>"."Wrong ID and Password!"."</h2>";
        echo "<a href='user.html'>"."<<..back"."</a>";
    }
}
   
    
   

   
?>