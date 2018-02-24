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
  height:30px;
  width:30%;
  border:1px solid red;
}
body {
    background-image: url("b4.jpg");
}

h1 {
    color: white;
    text-align: center;
}

p {
    font-family: verdana;
    font-size: 20px;
}
p {
    text-align: center;
}
</style>
</head>

<body>

  <?php
    include('header.php');
    ?>
    <br><br>
    <div class="page-header">
         <h2 align='center'>Free Accomadation</h2>              
	</div>
  <?php

include('connection.php');
$Acc_details = 'SELECT house_roomNO ,house_roomtype FROM accomadation where emp_nic is null';
   
   $result = mysqli_query( $conn ,$Acc_details ); // retrieve the room details........  

    print'<div id="table-wrapper">';
    print'<div id="table-scroll">';
    print'<div class="row">';

    print'<div class="table-responsive col-md-6">';
    print'<table class="table .table-bordered">';
    print' <thead>';
    print"<tr class='active'>";
    print'<th class="col-md-1">'."Room No"."</th>";
    print'<th class="col-md-2">'."Room type"."</th>";   
    print "</tr>";
      
   while($array = mysqli_fetch_array($result)) 
    {
        print ' <tbody> <tr class="info"> <td class="col-md-1">';
        echo $array[0]; 
        print '</td> <td class="col-md-2">';
        echo $array[1]; 
        print '</td> </tr >';
    }
    print " </tbody>";   
    print '</table>';
   print'</div>';

    print'<div class="table-responsive col-md-6">';
    print'<table class="table .table-bordered">';
    print' <thead>';
    print"<tr class='active'>";
    print'<th class="col-md-1">'."House No"."</th>";
    print'<th class="col-md-2">'."House type"."</th>";   
    print "</tr>";
    
  $Acc_details_house = 'SELECT house_no ,house_type FROM house where emp_nic is null';
   
   $result_h = mysqli_query( $conn ,$Acc_details_house); // retrieve the house details....
   
   while($array = mysqli_fetch_array($result_h)) 
    {
        print ' <tbody> <tr class="info"> <td class="col-md-1">';
        echo $array[0]; 
        print '</td> <td class="col-md-2">';
        echo $array[1]; 
        print '</td> </tr >';
    }
    print " </tbody>";   
    print '</table>';
   print'</div>';

  print'</div>'; 
 print'</div>';
print'</div>';
?>
	 <div class="page-header">
          <h2 align='center'>Add New Room or House</h2>            
    </div>
    <form id="" class="form-horizontal" role="form" method="post" action="">
	<div class = "form-group">
        <label class="col-sm-2 control-label"> Select Type :</label>
        <div class="col-sm-6">
			<div class="radio" required="">
				<label>
					<input type="radio" name="house"  value="house" /> House
                </label>
				<label>
                    <input type="radio" name="room"  value="room" /> Room
                </label>
            </div>
       </div>
    </div>
	
    <div class="form-group">
		<label for="inputName" class="col-sm-2 control-label">Enter Room No:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="room_no"  name='room_no' placeholder="B-01">
		</div>
    </div>
	
    <div class="form-group">
		<label for="inputName" class="col-sm-2 control-label">Enter Room Type:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="room_type"  name='room_type' placeholder="B">
		</div>
    </div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary" id="" name="">Submit</button>
		</div>
    </div>
	</form>

</body>
</html>
