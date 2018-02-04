<?php
include('../connection.php');
// Array with names
$a=$_REQUEST['q'];

$sql="SELECT * FROM designation WHERE name='$a'";
$result=mysqli_query($conn, $sql);
$nu=mysqli_num_rows($result);
//echo $nu;
if($nu>0){
while($row = mysqli_fetch_assoc($result)) {
echo $row['marks'];
}

}else{
echo "error";
}
?>