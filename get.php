<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Details</title>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>  
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"> </script>
<style>
body {
    background-image: url("images/other/b4.jpg");
}
h1 {
    color: white;
    text-align: center;
}
p {
    font-family: verdana;
    font-size: 20px;
}
</style>
</head>
<body>
    <?php
		include('header.php');
    ?>
    <br><br>
<?php
	if(isset($_POST['signup'])){
// $name=mysql_real_escape_string($_POST['Name']);
//$worked=mysql_real_escape_string($_POST['Worked']);
/*$servername = "localhost";
$username = "root";
$password = "";
$DB_error = "Error in connecting DB";
$dbName="Residential2";
//'$id= $_POST['houseid'];
$conn = mysqli_connect($servername, $username, $password,$dbName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}*/
//echo "Connected successfully";

/*$sql = "INSERT INTO users (NIC,Fname,NameWI,Address,Room_house_Type,Sex,Mstatus,job_nature ,date_appo,sppy ,sppm,spty,sptm ,Distance,SName,GNDiv,DSDiv,District,Employment,Dyears,Dmonths,Workplace,elet,gnlet,designation,Faculty_Branch,Department_section,PAcc)
VALUES ('$_POST[nic]','$_POST[fullName]','$_POST[initName]','$_POST[address]','$_POST[houseid]','$_POST[gender]','$_POST[mstatus]','$_POST[empstatus]','$_POST[appointmentd]','$_POST[servicepy]','$_POST[servicepm]','$_POST[servicety]','$_POST[servicetm]','$_POST[dist]','$_POST[spouseName]','$_POST[gndiv]','$_POST[dsdiv]','$_POST[district]','$_POST[spemp]','$_POST[sedy]','$_POST[sedm]','$_POST[waddress]','$_POST[empl]','$_POST[gsl]','$_POST[Desig]','$_POST[Faculty]','$_POST[Dept]','$_POST[Pacc]')";


if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/
//$g=$_POST['nic'];
include('connection.php');
 $sql = "SELECT*  FROM users where NIC='$_POST[UID]' ";
   
   $retval = mysqli_query( $conn ,$sql );
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }
   
  // $row = mysqli_fetch_array($retval, MYSQL_NUM);
  while($row = mysqli_fetch_array($retval, MYSQL_NUM)) {
    echo '<div class="container">' ;
    echo '<div class="row">';
    echo '<div class="col-sm-6 col-sm-offset-2">';
     echo '<div class="page-header">';
     echo '<h2 align="center">'.'Details of the employer'.'</h2>';
     echo '</div>';
     echo '<form id="defaultForm" method="post" class="form-horizontal" >';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'NIC'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="1" name="1" value="'."{$row[1]}" .'"placeholder="" readonly/>';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'First Name'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="2" name="2" value="'."{$row[2]}" .'"placeholder="Ex: John Watson" readonly/>';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'Name with Initials'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="3" name="3" value="'."{$row[3]}" .'"placeholder="Ex: John Watson" readonly/>';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'Address'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="4" name="4"value="'."{$row[5]}" .'"placeholder="Ex: John Watson" readonly/>';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'Room House type'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="5" name="5" value="'."{$row[8]}" .'"placeholder="Ex: John Watson" readonly/>';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'Sex'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="6" name="6" value="'."{$row[11]}" .'"placeholder="Ex: John Watson" readonly/>';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'Martial status'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="7" name="7" value="'."{$row[12]}" .'"placeholder="Ex: John Watson" readonly/>';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'UPF No'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="8" name="8" value="'."{$row[17]}" .'"placeholder="Ex: John Watson" readonly/>';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'Designation'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="9" name="9" value="'."{$row[13]}" .'"placeholder="Ex: John Watson" readonly/>';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'Job nature'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="10" name="10" value="'."{$row[16]}" .'"placeholder="Ex: John Watson" readonly/>';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'Date of appoinment'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="11" name="11" value="'."{$row[15]}" .'"placeholder="Ex: John Watson" readonly/>';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'Faculty/Branch'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="12" name="12" value="'."{$row[18]}" .'"placeholder="Ex: John Watson" readonly/>';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'Department/Section'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control"id="13" name="13" value="'."{$row[19]}" .'"placeholder="Ex: John Watson" readonly/>';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'Duration'.'</label>';
     echo '<div class="col-sm-2">';
     echo '<label ">'.'Permanant Years'.'</label>'.'<input type="text" class="form-control" id="14" name="14" value="'."{$row[20]}" .'"placeholder="Ex: John Watson" readonly/>';
     echo '</div>';
     echo '<div class="col-sm-2">';
     echo '<label ">'.'permanant Months'.'</label>'.'<input type="text" class="form-control" id="15" name="15" value="'."{$row[21]}" .'"placeholder="Ex: John Watson" readonly/>';
     echo '</div>';
      echo '<div class="col-sm-2">';
     echo '<label ">'.'temporary years'.'</label>'.'<input type="text" class="form-control" id="16" name="16" value="'."{$row[22]}" .'"placeholder="Ex: John Watson" readonly/>';
     echo '</div>';
      echo '<div class="col-sm-2">';
     echo '<label ">'.'temporary Months'.'</label>'.'<input type="text" class="form-control" id="17" name="17" value="'."{$row[23]}" .'"placeholder="Ex: John Watson" readonly/>';
     echo '</div>';
     echo '</div>';
     
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'Distance'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" readonly class="form-control" id="18" name="18" value="'."{$row[24]}" .'"placeholder="Ex: 200 " />'.'<label ">'.'km'.'</label>';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'Previous Accomadation'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" readonly class="form-control" id="19" name="19" value="'."{$row[25]}" .'"placeholder="Ex: J" />';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'Marks'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" readonly class="form-control" value="'."{$row['45']}" .'"placeholder="Ex: 89" />';
     echo '</div>';
     echo '</div>';
     echo "</form>";
     echo '</div>';
     echo '</div>';
     echo '</div>';
    
  
        if($row[12]=='married'){
           echo '<div class="container">' ;
     echo '<div class="row">';
     echo '<div class="col-sm-6 col-sm-offset-2">';
     echo '<div class="page-header">';
     echo '<h2 align="center">'.'Details of the Spouse'.'</h2>';
     echo '</div>';
     echo '<form id="defaultForm" method="post" class="form-horizontal" >';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'Spouse Name'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control id="23" name="23"" value="'."{$row[27	]}" .'"placeholder="" readonly/>';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'GN division'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="24" name="24" value="'."{$row[28]}" .'"placeholder="" readonly/>';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'DS division'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="25" name="25" value="'."{$row[29]}" .'"placeholder="" readonly/>';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'District'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="26" name="26" value="'."{$row[30]}" .'"placeholder="" readonly/>';
     echo '</div>';
     echo '</div>';
	 echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'Spouse Employment'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="27" name="27" value="'."{$row[31]}" .'"placeholder="" readonly/>';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'Organization/Institute'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="28" name="28" value="'."{$row[32]}" .'"placeholder="" readonly/>';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'Duration'.'</label>';
     echo '<div class="col-sm-2">';
     echo '<label ">'.'Years'.'</label>'.'<input type="text" class="form-control" id="29" name="29" value="'."{$row[33]}" .'"placeholder="" readonly/>';
     echo '</div>';
     echo '<div class="col-sm-2">';
     echo '<label ">'.'Months'.'</label>'.'<input type="text" class="form-control" id="30" name="30" value="'."{$row[34]}" .'"placeholder="" readonly/>';
     echo '</div>';
     echo '</div>';
	 echo '<div class="form-group">';
     echo '<label class="control-label">'.'If an employer of the SUSL'.'</label>';
     echo '</div>';
	 echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.' Designation and grade'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="31" name="31" value="'."{$row[36]}" .'"placeholder="" readonly/>';
     echo '</div>';
     echo '</div>';
	 echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.' Salary Code'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="31" name="31" value="'."{$row[37]}" .'"placeholder="" readonly/>';
     echo '</div>';
     echo '</div>';
	 echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'Full Service period to SUSL'.'</label>';
     echo '<div class="col-sm-2">';
     echo '<label ">'.'Permanent Years'.'</label>'.'<input type="text" class="form-control" id="17" name="17" value="'."{$row[38]}" .'"placeholder="0" readonly/>';
     echo '</div>';
     echo '<div class="col-sm-2">';
     echo '<label ">'.'Permanent Months'.'</label>'.'<input type="text" class="form-control" id="18" name="1588" value="'."{$row[39]}" .'"placeholder="0" readonly/>';
     echo '</div>';
     echo '<div class="col-sm-2">';
     echo '<label ">'.'Temporary Years'.'</label>'.'<input type="text" class="form-control" id="19" name="19" value="'."{$row[40]}" .'"placeholder="0" readonly/>';
     echo '</div>';
     echo '<div class="col-sm-2">';
     echo '<label ">'.'Temporary Months'.'</label>'.'<input type="text" class="form-control" id="20" name="20" value="'."{$row[41]}" .'"placeholder="0" readonly/>';
     echo '</div>';
     echo '</div>';
	 
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.' workplace Address'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="31" name="31" value="'."{$row[42]}" .'"placeholder="" readonly/>';
     echo '</div>';
     echo '</div>';
	 echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.' City'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="31" name="31" value="'."{$row[43]}" .'"placeholder="" readonly/>';
     echo '</div>';
     echo '</div>';
	 echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.' Postal Code'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="31" name="31" value="'."{$row[44]}" .'"placeholder="" readonly/>';
     echo '</div>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="control-label">'.'check the box in front if you are using these letters for marks'.'</label>';
     echo '</div>';
     echo '<div class="form-group">';
     echo '<label class="col-sm-3 control-label">'.'Letter from employer'.'</label>';
     echo '<div class="col-sm-6">';
     echo '<input type="text" class="form-control" id="32" name="32" value="'."" .'"placeholder="" readonly/>';
     echo '</div>';
     echo'<div class="checkbox">';
     echo '<label class="checkbox-inline no_indent">';
     echo '<input name="houseid" id="houseid" name="houseid" type="checkbox" value="D">';
     echo  '</label>';
     echo  '</div>';
     echo '</div>';
     echo "</form>";
     echo '</div>';
     echo '</div>';
     echo '</div>';

         }
 
  echo '<A HREF="javascript:window.print()">'."Click to Print This Page" ."</A>" ; 
}
}
else{
echo "</br></br></br></br></br><center><h3>No Previous applications</h3></center>";
}
   mysqli_free_result($retval);
 // echo "Fetched data successfully\n";
mysqli_close($conn);      
        
 // echo "<h3 align='center'>"."Details entered successfully"."</h3>";          
            
?>            
 </body>
</html>
