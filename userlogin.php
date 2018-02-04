<?php
session_start();
include('connection.php');
//$upfno;
//$nic;
if(empty($_POST['upfno'])||empty($_POST['pwd']) || empty($_POST['nic'])|| empty($_POST['confrmpwd']))
   {
   //$upfno=$_POST['upfno'];
   //$nic=$_POST['nic'];
   // $responsemsg="please provide nic";
 echo "<h2 align= 'center'>"."Please Provide Credentials!"."</h2>";
  return false;
   }
   else{
    
if($_POST['pwd']==$_POST['confrmpwd']){

//$password=htmlentities(strip_tags(mysql_real_escape_string($_POST['pwd'])));
//$nic=htmlentities(strip_tags(mysql_real_escape_string($_POST['nic'])));

$enc_password=md5($_POST['pwd']);

$sql=mysqli_query($conn, "SELECT * FROM user_verify WHERE UPF='$_POST[upfno]' AND UID='$_POST[nic]'");
$num_rows=mysqli_num_rows($sql);
	
  if($num_rows > 0){
    $ses_sql = mysqli_query($conn,"UPDATE `user_verify` SET `password`='$enc_password' WHERE UPF='$_POST[upfno]' ") ;

   //$num_rows = mysqli_num_rows($ses_sql);
   //$ses_sql1 = mysqli_query($conn,"SELECT* FROM users where nic = '$_POST[AdID]' && password='$_POST[Adpw]'; ") ;

   //$num_rows1 = mysqli_num_rows($ses_sql1);
   $_SESSION['NIC']=$_POST['upfno'];
   mysqli_close($conn);
   header("Location: application.php");
  }
  else {
      echo "<h2 align= 'center'>"."Invalid User!"."</h2>";
      echo "<a href='admin.php'>"."<<..back"."</a>";
  }
	
}
	   
else {
	echo "<h2 align= 'center'>"."Unmatching password!"."</h2>";
 	echo "<a href='admin.php'>"."<<..back"."</a>";
}
//if ($num_rows==1) {
   // $_SESSION['NIC']=$_POST['upfno'];
      //  header("Location: application.php");
    //}

	//else{
     // echo "<h2 align= 'center'>"."Wrong ID and Password!"."</h2>";
       // echo "<a href='admin.php'>"."<<..back"."</a>";
  //  }   
}
?>
