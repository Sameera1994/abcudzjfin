<?php

include('../connection.php');
// Array with names
$a=$_REQUEST['q'];

$sql="SELECT * FROM designation WHERE cat=$a";
$result=mysqli_query($conn, $sql);
$nu=mysqli_num_rows($result);
//echo $nu;

if($nu>0){
//echo "<select name='Desig' id='Desig'class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown' onchange='myfunction1()'>";
echo "<option>--Select Designation--</option>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<option value='$row[name]'>$row[name]</option>";
  }
  
  //echo "</select>";
}
else{
  echo "error";
}

?>
