 <!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Login</title>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>  
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"> </script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/formValidation.css"/>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/formValidation.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

 <style>
body {
    background-image: url("images/other/stringio.jpg");
}

h2 {
    color: black;
    text-align: center;
}

p {
    font-family: verdana;
    font-size: 20px;
}
form {
    background-color: white;
    text-align: center;
    border-radius: 25px;
}
</style>
</head>

<body>
    <?php
    include('hello.php');
    ?>
    <div class="container"> 
 <!-- Contacts -->
 <div id="contacts">
   <div class="row">    
     <!-- Alignment -->
    <div class="col-sm-offset-2 col-sm-6"><br>
  
<form id="contactForm" method="post" class="form-horizontal"  action="user_verify.php">
    <div class="page-header" >
                <br>
                <h2 align="center">Please Login</h2>
            </div>

    
    <div class="form-group">
        <label class="col-md-3 control-label">UPF NO</label>
        <div class="col-md-6">
            <input type="text" class="form-control" required=""  name="AdID"  id="AdID"/>
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-md-3 control-label">Password</label>
        <div class="col-md-6">
            <input type="password" class="form-control"  required="" name="Adpw" id="Adpw" />
        </div>
    </div>
    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <div id="responsemsg"></div>
                        </div>
                    </div>
    <!-- #messages is where the messages are placed inside -->
    <div class="form-group">
        <div class="col-md-9 col-md-offset-3">
            <div id="messages"></div>
        </div>
    
    <div class="form-group">
        <div class="col-md-9 col-md-offset-3">
            <button type="submit" class="btn btn-primary" id="sub1" name="sub1">Login</button>
            
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
               AdID: {
                    validators: {
                        notEmpty: {
                            message: '  UPF No required'
                        }
                        
                    }
                },

                Adpw: {
                    validators: {
                        notEmpty: {
                            message: 'Password required'
                        }
                    }
                }
                
            }
        });
    });
/*$("#sub1").click( function() {
        $.ajax({
            type:'POST',
            url: 'user_verification.php',
            data:$('#contactForm').serialize(),
            success: function(response) {
                $('#contactForm').find('#responsemsg').html(response);
                console.log(response);
            },
            error: function(response){
                $('#contactForm').find('#responsemsg').html(response);
                console.log(response);
            }
        });
    });*/
</script>

</body>
</html>
 
