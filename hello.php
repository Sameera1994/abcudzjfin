<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

</head>

    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            <a href="" class="navbar-brand"> Sabaragamuwa University of Sri Lanka</a>
        </div>
        <div class="collapse navbar-collapse " id="navbar-collapse">
            <ul class="nav navbar-nav">

                <li><a href="index.php">Home</a> </li>
<?php
error_reporting(0);
if($_SESSION['NIC'] != "" && $_SESSION['NIC'] != "Admin"){
?>
<li><a href="user_viewapp.php">View Application</a> </li>

<li><a href="changepassword.php">Change password</a> </li>

<li><a href="logout.php" align="right">logout</a> </li>
<?php
}else{
//echo "Sign in";
}
?>
           
                <!--<li><a href="application.php">Register</a> </li>-->
            </ul>
        </div>
    </div>
</nav>
        
    
    </div>
    </body>
    </html>