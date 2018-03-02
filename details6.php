
<html>
    <head>

        <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Login</title>
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
a {
    color: red;
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
                <h2 align='center'>Employees Requested for Accomadation</h2>
                
            </div>
  
     <?php

include('connection.php');
$Acc_details = 'SELECT NIC,NameWI,UPF FROM users ';
   
   $result = mysqli_query( $conn ,$Acc_details );


   
      
    print'<div id="table-wrapper">';
    print'<div id="table-scroll">';
    print'<div class="row" >';
    
    print'<div class="table-responsive col-sm-8 col-sm-offset-2">';
    print'<table class="table .table-condensed">';
             print' <thead>';
                print"<tr class='active'>";
      print'<th class="col-md-1">'."NIC"."</th>";
      print'<th class="col-md-2">'."Name"."</th>";
      print'<th class="col-md-2">'."UPF"."</th>"; 
     // print'<th class="col-md-2">'."delete"."</th>";
      print "</tr>";
      
             
            
  
    
   while($array = mysqli_fetch_array($result)) 
 
    {
        print ' <tbody> <tr class="danger"> <td class="col-md-1">';
        echo $array[0]; 
        print '</td> <td class="col-md-2">';
        echo $array[1]; 
        print '</td> <td class="col-md-2">';
        echo $array[2]; 
        //echo'</td><td class="col-md-2"><a  href="#contact"><img src="error.png" width="30" height="30"></a>'; 
        print '</td> </tr >';
        
    }
    
    print " </tbody>";
     

    
      
    
    
   
     print       '</table>';
  print'</div>';
print'</div>'; 
print'</div>';


?>
<section id="contact" >
  <div class="page-header">
                <h2 align='center'>Enter the ID number you want to delete</h2>
                
            </div>

    <form class="form-horizontal" role="form" method="post" action="del.php">
  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">NIC</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="UID"  name='UID' placeholder="907960480v">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-danger" id="signup" name="signup"> Delete</button>
    </div>
  </div>
  </section>
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
                        message: 'The House number is required and cannot be empty'
                    }
                }
            }
            
         
        }
    });
});
</script>


</body>
</html>

