<?php
include('../connection.php');

$a=$_REQUEST['q'];

$sql="SELECT id FROM faculty WHERE fac_name='$a'";
$result=mysqli_query($conn, $sql);

$fac_row=mysqli_fetch_array($result);

$dep="SELECT * FROM department WHERE fac_id=$fac_row[0]";
$result1=mysqli_query($conn, $dep);
$nu=mysqli_num_rows($result1);

//echo $nu;
if($nu>0){
//echo "<select name='Desig' id='Desig'class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown' onchange='myfunction1()'>";
echo "<option>--Select Department--</option>";
while($row = mysqli_fetch_assoc($result1)) {
echo "<option value='$row[dep_name]'>$row[dep_name]</option>";
}
//echo "</select>";
}else{
echo "error";
}

?>