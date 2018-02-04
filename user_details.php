
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
body {
    background-image: url("images/other/b4.jpg");
}

h1 {
    color: black;
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
    include('hello.php');
    ?>
    <br><br>
    <div id="contacts">
   <div class="row">    
     <!-- Alignment -->
    <div class="col-sm-offset-2 col-sm-6"><br>
  
  <div class="page-header">
                <h2 align='center'>Get my Details</h2>
                
            </div>

    <form class="form-horizontal" role="form" method="post" action="get1.php">
  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">ID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="UID"  name='UID' placeholder="ID">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" id="signup" name="signup"> Get Details</button>
    </div>
  </div>
</form>
</div>
      </div>
    </div>
   </div>
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

