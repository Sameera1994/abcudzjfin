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
  <div class="page-header">
    <br><br>
                <h2 align='center'>Employees Requested for Accomadation(Room)</h2>               
  </div>
  
     <?php

include('connection.php');
$user_details = 'SELECT users.NIC, users.NameWI,users.Room_house_Type,users.marks,users.AppDate,users.Designation,users.Ho_ro_order FROM users INNER JOIN designation on designation.name=users.Designation WHERE users.Accommodation_type="room" and users.Nacc is null ORDER BY designation.cat asc, users.AppDate asc ';
   
   $result = mysqli_query( $conn ,$user_details );

    print'<div  id="table-wrapper">';
    print'<div id="table-scroll">';
    print'<div class="row" >';
    print'<div class="table-responsive col-md-8">';
    print'<table  id="myTable1" class="table table-fixed" cellspacing="0" width="100%">';

    print' <thead>';
    print"<tr class='active'>";
    print'<th class="col-md-1">'."NIC"."</th>";
    print'<th class="col-md-2">'."Name"."</th>"; 
    print'<th class="col-md-2">'."Designation"."</th>"; 
    print'<th class="col-md-3">'."Requested Accomadation"."</th>";
    print'<th class="col-md-3">'."Requested Order"."</th>";
    print'<th class="col-md-4">'."Marks"."</th>"; 
    print'<th class="col-md-4">'."Applied date"."</th>";
    print "</tr>";
      
   while($array = mysqli_fetch_array($result)) 
    {
        print ' <tbody> <tr class="info"> <td class="col-md-1">';
        echo $array[0]; 
        print '</td> <td class="col-md-2">';
        echo $array[1]; 
    	print '</td> <td class="col-md-3">';
        echo $array[5]; 
        print '</td> <td class="col-md-3">';
        echo $array[2];
        print '</td> <td class="col-md-4">';
        echo $array[6];
        print '</td> <td class="col-md-4">';
        echo $array[3]; 
        print '</td> <td class="col-md-4">';
        echo $array[4];
        print '</td> </tr >';
    }
    print " </tbody>";
    print "</table>";
    print "</div>";

    $Acc_details = 'SELECT house_roomNO ,house_roomtype FROM accomadation WHERE emp_nic is null ';
   
    $result = mysqli_query( $conn ,$Acc_details );
    print'<div class="table-responsive col-md-4">';
    print'<table class="table .table-bordered">';
    print'<thead>';
    print"<tr class='active'>";
    print'<th class="col-md-1">'."Room No"."</th>";
    print'<th class="col-md-2">'."Room Type"."</th>"; 
     // print "<th>"."Requested Accomadstion"."</th>";
     // print"<th>"."Marks"."</th>";
    print "</tr>";
     
   while($array = mysqli_fetch_array($result)) 
 
    {
        print '<tbody>  <tr class="info"> <td class="col-md-1">';
        echo $array[0]; 
        print '</td> <td class="col-md-2">';
        echo $array[1]; 
        print "</td> </tr></tbody>";
    }
    
     print       '</table>';
  print'</div>';
print'</div>'; 
print'</div>';

?>

    <div class="page-header">
                <h2 align='center'>Assaigning Accomadation(Room)</h2>
                
            </div>
    <form id="contactForm" class="form-horizontal" role="form" method="post" action="assaign.php">
  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Enter NIC </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="UID"  name='UID' placeholder="907960480v">
    </div>
  </div>
   
  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Room number </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="HNo"  name='HNo' placeholder="34">
    </div>
  </div>
   
  <!--<div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Administrator ID </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="AID"  name='AID' placeholder="A01">
    </div>
  </div>-->
  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Date of assaigning </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="date"  value="<?php echo date("Y-m-d") ?>" name='date' readonly>
    </div>
  </div>
   
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" id="signup" name="signup">Assaign</button>
    </div>
  </div>
</form>
<script>
$(document).ready(function() {
    $('#contactForm').bootstrapValidator({
       framework: 'bootstrap',
        err: {
            container: 'tooltip'
        },
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            UID: {
                validators: {
                    notEmpty: {
                        message: 'The ID is required and cannot be empty'
                    }
                }
            },
            HNo: {
                validators: {
                    notEmpty: {
                        message: 'House number is required and cannot be empty'
                    }
                }
            },
            AID: {
                validators: {
                    notEmpty: {
                        message: 'The Administrator ID is required and cannot be empty'
                    }
                }
            },
            date: {
                validators: {
                    notEmpty: {
                        message: 'The Date is required and cannot be empty'
                    }
                }
            }
        }
    });
});
</script>
          
</body>
</html>
