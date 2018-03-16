<?php
session_start();
include('connection.php');

if(empty($_POST['AdID'])||empty($_POST['Adpw']))
   {
    $responsemsg="please provide password";
  echo "<h2 align= 'center'>"."Please Provide ID and Password!"."</h2>";
  return false;
   }
   else{

$aid=htmlentities(strip_tags(mysqli_real_escape_string($conn,$_POST['AdID'])));
$pw=htmlentities(strip_tags(mysqli_real_escape_string($conn,$_POST['Adpw'])));
$encpwd=md5($pw);

$ses_sql = mysqli_query($conn,"SELECT * FROM admins WHERE AdminId ='$_POST[AdID]' AND password='$encpwd'") ;

$num_rows = mysqli_num_rows($ses_sql);


$ses_sql1 = mysqli_query($conn,"SELECT * FROM users where nic = '$_POST[AdID]' AND password='$_POST[Adpw]' ") ;

$num_rows1 = mysqli_num_rows($ses_sql1);


$ses_sql2 = mysqli_query($conn, "SELECT * FROM user_verify where UPF = '$_POST[AdID]' AND password='$encpwd' ") ;

$num_rows2 = mysqli_num_rows($ses_sql2);


mysqli_close($conn);

   if ($num_rows==1) {
        $_SESSION['NIC']="Admin";
        header("Location: admin_details.php");
    } else if($num_rows1==1) {
       header("Location: user_details.php");
    } 
	else if($num_rows2==1) {
       $_SESSION['NIC']=$_POST['AdID'];
       header("Location: application.php");
    }
     else{
      echo "<h2 align= 'center'>"."Wrong ID and Password!"."</h2>";
        echo "<a href='admin.php'>"."<<..back"."</a>";
    }
   
}
   ?>