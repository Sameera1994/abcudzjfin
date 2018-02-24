<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Application</title>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>  
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"> </script>
<style>
#table-wrapper {
  position:relative;
}
#table-scroll {
  height:300px;
  overflow:auto;  
  margin-top:20px;
}
#table-wrapper table {
  width:100%;

}

#table-wrapper table thead th .text {
  position:absolute;   
  top:-20px;
  z-index:2;
  height:20px;
  width:30%;
  border:1px solid red;
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
  <div class="page-header">
		<h2 align='center'>Employees assigned for Accommodation</h2>
  </div>
  
     <?php

include('connection.php');
	$user_details_house = 'SELECT NIC, NameWI,Nacc,marks FROM users where Accommodation_type = "house" and Nacc is not null GROUP BY NIC ORDER BY Designation';
	$result_house = mysqli_query( $conn ,$user_details_house);
	
    print'<div id="table-wrapper">';
    //print'<div id="table-scroll">';
    print'<div class="row">';
	
    print'<div class="table-responsive col-sm-6">';
	print'<h4 align = "center"> House Details </h4>';
    print'<table class="table table-striped">';
	print'<thead>';
	print"<tr class='active' >";
    print'<th class="col-md-1">'."NIC"."</th>";
    print'<th class="col-md-2">'."Name"."</th>"; 
    print '<th class="col-md-3">'."Accomadation Type"."</th>";
    print'<th class="col-md-4">'."Marks"."</th>"; 
    print "</tr>";
        
   while($array = mysqli_fetch_array($result_house))
   {
        print ' <tbody> <tr class="success"> <td class="col-md-1">';
        echo $array[0]; 
        print '</td> <td class="col-md-2">';
        echo $array[1]; 
        print '</td> <td class="col-md-3">';
        echo $array[2]; 
        print '</td> <td class="col-md-4">';
        echo $array[3]; 
        print '</td> </tr >';
    }
    print " </tbody>";
    print "</table>";
	print "</div>";
	
	$user_details_room = 'SELECT NIC, NameWI,Nacc,marks FROM users where Accommodation_type = "room" and Nacc is not null GROUP BY NIC ORDER BY Designation';
	$result_room = mysqli_query( $conn ,$user_details_room);
	
	print'<div class="table-responsive col-sm-6">';
	print'<h4 align="center"> Room Details </h4>';
    print'<table class="table table-striped">';
	print'<thead>';
	print"<tr class='active' >";
    print'<th class="col-md-1">'."NIC"."</th>";
    print'<th class="col-md-2">'."Name"."</th>"; 
    print '<th class="col-md-3">'."Accomadation Type"."</th>";
    print'<th class="col-md-4">'."Marks"."</th>"; 
    print "</tr>";
        
   while($array = mysqli_fetch_array($result_room))
   {
        print ' <tbody> <tr class="success"> <td class="col-md-1">';
        echo $array[0]; 
        print '</td> <td class="col-md-2">';
        echo $array[1]; 
        print '</td> <td class="col-md-3">';
        echo $array[2]; 
        print '</td> <td class="col-md-4">';
        echo $array[3]; 
        print '</td> </tr >';
    }
    print " </tbody>";
    print "</table>";
	print "</div>";
	 
    print "</div>";
    //print "</div>";
    print "</div>"
	
?>

</body>
</html>
