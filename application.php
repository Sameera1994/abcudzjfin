<!DOCTYPE html>
<html>
<head>
<?php
session_start();

if(empty($_SESSION['NIC'])){
header('Location: admin.php');
}else if($_SESSION['NIC']=="Admin"){
header('Location: admin_details.php');
}
else{
include('connection.php');
$ses=$_SESSION['NIC'];

?>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Application</title>
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
	<script type="text/javascript" src="js/cal_marks.js"></script>
	
 <style>
body {
   background-image: url("images/other/b4.jpg");
}

h1 {
    color: black;
    text-align: center;
}

p {
    color:blue;
    font-family: verdana;
    font-size: 15px;
}
.check_list_ul{
 display:none;
}
</style>
<?php
    include('hello.php');
	
    ?>

</head>

<body>
  

    <div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="page-header">
                <hr>

                <h3>Instructions</h3>

                <p>
            Please refer to Articles 14-19, 28-30, 34, 35, 37-40 of the Constitution for Allocation of Accommodation-2015-SUSL (CAAA-2015-SUSL) before completing the application.
            <br>Incomplete applications will be rejected without prior notice.

                </p>
                <hr>
                <h2>APPLICATION FOR RESIDENTIAL FACILITIES</h2>
                <h2>SABARAGAMUWA UNIVERSITY OF SRI LANKA</h2>
            </div>
<form id="defaultForm" method="post" class="form-horizontal" action="forminsertnew.php" enctype="multipart/form-data">
				<div class="form-group">
				<label class="col-sm-3 control-label">Accomadation Type</label>
				<div class="col-sm-6" required="">
                        <div class="radio">
                            <label>
                                <input type="radio" name="house1" value="house" /> House
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="house1" value="room" /> Room
                            </label>
                        </div>
                 </div>
				
				</div>
				<hr>
                <div class="form-group">
                    <label class="col-sm-6">Requested HOUSE Type</label>
                    <label class="col-sm-6">Requested Room Type</label>
                    <div class="col-sm-6">
                        <div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input name="houseid[]" id="houseid"  type="checkbox" value="D">
                                D
                            </label>
                        </div>
                        <div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input name="houseid[]" id="houseid"  type="checkbox" value="J">
                                J
                            </label>
                        </div>
                        <div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input name="houseid[]" id="houseid"  type="checkbox" value="K">
                                K
                            </label>
                        </div>
                    </div>
					
                    <div class="col-sm-3">
                        <div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input name="houseid[]" id="houseid" type="checkbox" value="B">
                                B
                            </label>
                        </div>
                        <div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input name="houseid[]" id="houseid" type="checkbox" value="V">
                                V
                            </label>
                        </div>
                        <div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input name="houseid[]" id="houseid" type="checkbox" value="Kinchigune">
                                Kinchigune
                            </label>
                        </div>
                        <div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input name="houseid[]" id="houseid" type="checkbox" value="Nerd">
                                Nerd
                            </label>
                        </div>
                    </div>
					<div class="col-sm-3">
                        <div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input name="houseid[]" id="houseid" type="checkbox" value="DC">
                                DC
                            </label>
                        </div>
                        <div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input name="houseid[]" id="houseid" type="checkbox" value="W">
                                W
                            </label>
                        </div>
                        <div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input name="houseid[]" id="houseid" type="checkbox" value="T">
                                T
                            </label>
                        </div>
                        <div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input name="houseid[]" id="houseid" type="checkbox" value="K Sharing">
                                K Sharing
                            </label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-sm-3 control-label">House or Room order:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="h_r_order"  required="" placeholder="B,Kinchigune,Nerd" />
                    </div>    
                </div>
                <hr>
                <h4 class="form-group">DETAILS OF THE APPLICANT</h4>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="fullName"  required="" placeholder="Ex: John Watson" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Name with Initials</label>
                    <div class="col-sm-8">
					<?php
                          $sqlnic="SELECT * FROM user_verify WHERE UPF='$_SESSION[NIC]'";
                          $res=mysqli_query($conn,$sqlnic);
                           while($row=mysqli_fetch_assoc($res)){
                        ?>
                        <input type="text" class="form-control" value="<?php echo $row['Name'];?>" name="initName" readonly placeholder="Ex: J. Watson" />
						   <?php } ?>   
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Permanent Address</label>
                    <div class="col-sm-8">
                        <textarea rows="3" cols="50" class="form-control" required="" name="address" placeholder="Permanent address"></textarea>
						<input type="text" class="form-control" name="City" placeholder="City" required="">
						<input type="number" class="form-control" name="postal_code" placeholder="Postal Code" required="">
					</div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">NIC</label>
                    <div class="col-sm-5">
                       <?php
                          $sqlnic="SELECT * FROM user_verify WHERE UPF='$_SESSION[NIC]'";
                          $res=mysqli_query($conn,$sqlnic);
                           while($row=mysqli_fetch_assoc($res)){
                        ?>
                        <input type="text" readonly class="form-control" value="<?php echo $row['UID'];?>"name="nic"required=""  placeholder="Ex:75468123v"/>
                           <?php } ?>                   
					</div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Gender</label>
                    <div class="col-sm-6">
                        <div class="radio" required="">
                            <label>
                                <input type="radio" name="gender"   value="male" /> Male
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender"  value="female" /> Female
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Marital status</label>
                    <div class="col-sm-6">
                        <div class="radio" required="">
                            <label>
                                <input type="radio" name="mstatus"  value="married" /> Married
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="mstatus" value="umarried" /> Unmarried
                            </label>
                        </div>
                    </div>
                </div>
				
               <div class="form-group">
                    <label class="col-sm-3 control-label">Category</label>
                    <div class="">
                        <select id="cat" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" onchange='showHint()'>
						<option>--Select Category--</option>
						<option value=1>Academic Categories</option>
						<option value=2>Medical/Dental Categories</option>
						<option value=3>Academic Support Categories</option>
						<option value=4>Executive categories</option>
						<option value=5>Non-Academic Categories</option>
						</select>
                    </div>
			  </div>
		      <div class="form-group">
                    <label class="col-sm-3 control-label">Designation</label>
                    <div class="" id="dropdownid">
                        <select name="Desig" id="Desig"class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" onchange="myfunction1()">
						<option>--Select Designation--</option>
                    	</select>
                     </div>			
			  </div>
              <div class="form-group">
                    <div class="col-sm-3"> <label ><a>Marks for Designation</a></label></div>
                    <div class="col-sm-5" id="marks">
                     <input type="text"  name="tb4" id="tb4" readonly="true"/>
                    </div>
              </div>
   
              <div class="form-group">
                    <label class="col-sm-3 control-label">Salary code</label>
                    <label class="col-sm-2 control-label">--Auto Filled--</label>
              </div>

              <div class="form-group">
                    <label class="col-sm-3 control-label">Date of first appointment</label>
                    <div class="col-sm-4">
                        <input type="date" required="" class="form-control" name="appointmentd" />
                    </div>
              </div>

              <div class="form-group">
                    <label class="col-sm-3 control-label">Permanent(P) or Temporary(T)</label>
                    <div class="col-sm-6">
                        <div class="radio" required="">
                            <label>
                                <input type="radio" name="empstatus" value="permanant" /> P
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="empstatus" value="temporary" /> T
                            </label>
                        </div>
                    </div>
               </div>
		       <div class="form-group">
                    <label class="col-sm-3 control-label">UPF No</label>
                    <div class="col-sm-8">
                        <input type="text" value="<?php echo $_SESSION['NIC'];?>" readonly class="form-control"required=""  name="Upf" placeholder="Ex: " />
                    </div>
               </div>

               <div class="form-group">
                    <label class="col-sm-3 control-label">Faculty/Section</label>
                    <div class="col-sm-6 dropdown" >
					<select name="Faculty" id ="faculty" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" onchange="showdep()" >
					<option value="">--Select Faculty--</option>   
					<?php
						$sql="SELECT * FROM faculty";
						$res=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_array($res)){
							echo "<option value='$row[1]'>$row[1]</option>";
						}
					?> 
					</select>
					</div>
              </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Department/Branch</label>
                    <div class="col-sm-6 dropdown">

				<select name="Dept" id="Dept" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" >
					<option value="">--Select Department--</option> 
				</select>
				</select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" id="servicep">Full Service Period to SUSL</label>
                    <div class="col-sm-2" id="contact1">
                        <label>Permanent (Y)</label> <input type="number"   class="form-control" name="servicepy" id="servicepy" onchange='myfunction3()'/>
                    </div>
                    <div class="col-sm-2" id="contact2">
                        <label>Permanent (M)</label> <input type="number"   class="form-control" name="servicepm" id="servicepm" onchange='myfunction3()'/>
                    </div>
                    <div class="col-sm-2" id="contact3">
                        <label>Temporary (Y)</label> <input type="number" value="0"  class="form-control" name="servicety" id="servicety" onchange='myfunction3()'/>
                    </div>
                    <div class="col-sm-2" id="contact4">
                        <label>Temporary (M)</label> <input type="number" value="0"  class="form-control" name="servicetm" id="servicetm" onchange='myfunction3()' />
                    </div>
                    
                </div>
                 <div class="form-group">
                    <div class="col-sm-2"> <label><a>Marks for Duration</a></label></div>
                    <div class="col-sm-2">
						<input type="text"  name="tb5" id="tb5"  readonly="true"/>
                    </div>
                </div>

                <div class="form-group" id="contact5">
                    <label class="col-sm-3 control-label">Transportable Distance to SUSL</label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control"required=""  name="dist" id="dist" onkeyup='myfunction()' />
                        
                    </div>
                    
                    <div class="col-sm-2"> <label>km</label></div>
                    
                </div>
                <div class="form-group">
                    <div class="col-sm-2"> <label><a>Marks for distance</a></label></div>
                    <div class="col-sm-2">
                     
                           <input type="text"  name="tb3" id="tb3" readonly="true"/>
                    </div>
                </div>
                

                <div class="form-group">
                    <label class="col-sm-3 control-label">Previous Accommodation Provided by SUSL</label>
                        <div class="col-sm-3 dropdown">
                            <!--<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">House/Room
                                <span class="caret"></span></button>
                             <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" >D</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" >J</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" >K</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" >D Sharing</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" >B</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" >v</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" >Kinchigune</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" >Nerd</a></li>
    </ul>-->
     <select name="Pacc" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" onchange='myfunction4()'>
    <option value="">--Past Accomadation--</option>   
    <option value="D">D</option>
    <option value="J">J</option>
    <option value="K">K</option>
    <option value="D Sharing">D Sharing</option>
    <option value="B">B</option>
    <option value="V">V</option>
    <option value="Kinchigune">Kinchigune</option>
    <option value="Nerd">Nerd</option>
	<option value="No">None</option>
    </select>
	</div>
	<div class="col-sm-3">
	<input type="number" placeholder= "Duration" class="form-control" name="Pacc_duration" id="service_duration"/>
    </div>
                </div>
                <label><font size=4>Current Additional Duties:</font></label>
				 <div class="form-group">
                        <div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input id="houseid16" name="duty1[]" type="checkbox" value="Yes" onchange="myfunction5('houseid16')">
                                Head of the Department
                            </label>
                        </div>
                        <div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input  id="houseid20" name="duty2[]" type="checkbox" value="Yes" onchange="myfunction5('houseid20')">
                               Directors of Centers
                            </label>
                        </div>
						<div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input  id="houseid21" name="duty3" type="checkbox" value="Yes" onchange="myfunction5('houseid21')">
                               Coordinator appointed by VC
                            </label>
                        </div>
						<div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input  id="houseid22" name="duty4" type="checkbox" value="Yes" onchange="myfunction5('houseid22')">
                               Senior Student Counselor
                            </label>
                        </div>
						<div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input  id="houseid23" name="duty5" type="checkbox" value="Yes" onchange="myfunction5('houseid23')">
                               Deputy Senior Student Counselor
                            </label>
                        </div>
						<div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input  id="houseid24" name="duty6" type="checkbox" value="Yes" onchange="myfunction5('houseid24')">
                               University medical officer
                            </label>
                        </div>
						<div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input  id="houseid25" name="duty7" type="checkbox" value="Yes" onchange="myfunction5('houseid25')">
                              Academic warden
                            </label>
                        </div>
						<div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input  id="houseid26" name="duty8	" type="checkbox" value="Yes" onchange="myfunction5('houseid26')">
                              Chairman of University level committee
                            </label>
                        </div>
						<div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input  id="houseid27" name="duty9" type="checkbox" value="Yes" onchange="myfunction5('houseid27')">
                              Member of MPC
                            </label>
                        </div>
						<div class="checkbox">
                            <label class="checkbox-inline no_indent">
                                <input  id="houseid28" name="duty10" type="checkbox" value="Yes" onchange="myfunction5('houseid28')">
                              President/Secretary/Treasurer of Welfare Society SUSL,SUTA,UEOA,CUTTA
                              Staff Trade Union of the Sabaragamuwa university of Sri Lanka
                            </label>
                        </div>
				</div>
				
                <br>
                <div class="form-group">
                    <div class="col-sm-2"> <label><a> Full marks</a></label></div>
                    <div class="col-sm-2">
                     
                           <input type="text"  name="tb6" id="tb6" readonly="true"/>
                    </div>
                </div>
				
                <div class="form-group">
                    <div class="col-sm-11 col-sm-offset-1">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="agree" value="agree"/> I certify that the particulars furnished by the applicant in this application relevant to item 16 are true and accurate.
								<!--<input type="checkbox" name="agree" value="agree" /> I hereby certify that the particulars submitted by me in this application are true and accurate.  I am aware that if any of these particulars are found to be false or inaccurate, I am liable to be disqualified before allocation for accommodation and to be vacated the accommodation by giving 01 (One) month notice if the inaccuracy is detected after appointment. Further, I noted that the last statement of the Article 25 will be imposed if I fail to vacate the accommodation assuming that the tenure is expired at the date of notice given by the SUSL.-->
                            </label>
                        </div>
                    </div>
                </div>
             
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <!--<button type="submit" class="btn btn-success" name="signup" value="Sign up">Submit</button>-->
                    </div>
                </div>
                 <font color="red">Fill the spouse details</font><br><br>
  <div id="contact">
                <p class="form-group">Note:ONLY if you applied for (i) above and/or relevant to Articles 30 & 32 of the Constitution and/or relevant to
                    Paragraphs 1.6 & 2.3 of the Annexure 5 – MARKING SCHEME, Please refer <U>CAA-2018-SUSL</U><br> 
                </p>
                </h6>
                </div>
<div class="page-header">
                <hr>
                <h4>DETAILS OF SPOUSE</h4>
                
            </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Spouse's Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="spouseName" placeholder="Ex: John Watson" />
                    </div>
                </div>
                <!--<div class="form-group">
                    <label class="col-sm-3 control-label">NIC of the applicant</label>
                    <div class="col-sm-5">
                        <?php
                          $sqlnic="SELECT * FROM user_verify WHERE UPF='$_SESSION[NIC]'";
                          $res=mysqli_query($conn,$sqlnic);
                           while($row=mysqli_fetch_assoc($res)){
                        ?>
                        <input type="text" readonly class="form-control" value="<?php echo $row['UID'];?>"name="nic"required=""  placeholder="Ex:75468123v"/>
                           <?php } ?> 
                    </div>
                </div>-->

                <div class="form-group">
                    <label class="col-sm-3 control-label">GN Division</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="gndiv" placeholder="Ex: Gannoruwa Est" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">DS Division</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="dsdiv" placeholder="Ex: Yatinuwara" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">District</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="district" placeholder="Ex: Kandy" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Spouse's Employment</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="spemp" placeholder="Ex: Teacher" />
                </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-3 control-label">Organization/Institute</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="spem_org" placeholder="" />
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-3 control-label">Duratoin</label>
                    <div class="col-sm-2">
                        <label>Years</label><input type="number" class="form-control" value="0" name="sedy" />
                    </div>
                    <div class="col-sm-2">
                        <label>Months</label><input type="number" class="form-control" value="0" name="sedm" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Is your spouse a employee of SUSL?</label>
                       
                        <div class="col-sm-6">
                        <div class="radio">
                            <label>
                                <input type="radio" name="susl_agree"   value="true" /> Yes
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="susl_agree"  value="False" /> No
                            </label>
                        </div>
                    </div>
                    </div>
                
                <label >For SUSL employers only </label><br><br>
               <div class="form-group">
                    <label class="col-sm-3 control-label">Category</label>
                    <div class="">
                        <select id="cat_s" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" onchange='showHint1()'>
    
    <option>--Select Category--</option>
    <option value=1>Academic Categories</option>
    <option value=2>Medical/Dental Categories</option>
    <option value=3>Academic Support Categories</option>
    <option value=4>Executive categories</option>
    <option value=5>Non-Academic Categories</option>
    

	
    </select>
	

                    <!---    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" >Designation
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" id="menu1" name="menu1">
      <li role="presentation" ><a role="menuitem" tabindex="-1" >Senior Proffesor</a></li>
      <li role="presentation" ><a role="menuitem" tabindex="-1">Proffesor</a></li>
      <li role="presentation" ><a role="menuitem" tabindex="-1">Associate Professor</a></li>
      <li role="presentation" ><a role="menuitem" tabindex="-1" >Senior Lecturer Gr.I</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" >Senior Lecturer Gr.I</a></li>
      <li role="presentation" ><a role="menuitem" tabindex="-1"> Lecturer </a></li>
      <li role="presentation" ><a role="menuitem" tabindex="-1" >Lecturer Probationary</a></li>

    </ul>-->
                    </div>
					
		</div>
		 <div class="form-group">
                    <label class="col-sm-3 control-label">Designation</label>
                    <div class="" id="dropdownids">
                        <select name="Desig_s" id="Desig_s" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" onchange="myfunction1_s()">
    
  
   <option value="">--Select Designation--</option>
    
	

                    	</select>
                     </div>			
					</div>
               
			   
			   <div class="form-group">
                    <div class="col-sm-3"> <label ><a>Marks for Spouse Designation</a></label></div>
                    <div class="col-sm-5" id="marks_s">
                     <input type="text"  name="tb9" id="tb9" readonly="true"/>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-3 control-label">Salary Code:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="spouse_salary_code" placeholder="" />
                    </div>
                </div>	 
 
                <div class="form-group">
                    <label class="col-sm-3 control-label" id="Sservicep">Full service period to SUSL</label>
                    <div class="col-sm-2" id="Scontact1">
                        <label>Permanent (Y)</label> <input type="number"  value="0" class="form-control" name="Sservicepy" id="Sservicepy" onchange="myfunction3_2()"/>
                    </div>
                    <div class="col-sm-2" id="Scontact2">
                        <label>Permanent (M)</label> <input type="number"   value="0" class="form-control" name="Sservicepm" id="Sservicepm" onchange="myfunction3_2()"/>
                    </div>
                    <div class="col-sm-2" id="Scontact3">
                        <label>Temporary (Y)</label> <input type="number"  value="0" class="form-control" name="Sservicety" id="Sservicety" onchange="myfunction3_2()"/>
                    </div>
                    <div class="col-sm-2" id="Scontact4">
                        <label>Temporary (M)</label> <input type="number"   value="0" class="form-control" name="Sservicetm" id="Sservicetm" onchange="myfunction3_2()" />
                    </div>
                    
                    
                </div>
				
				<div class="form-group">
                    <div class="col-sm-3"> <label ><a>Marks for Spouse experience</a></label></div>
                    <div class="col-sm-5" id="marks_s">
                     <input type="text"  name="tb10" id="tb10" readonly="true"/>
                    </div>
                </div>
                 
                <label >For non SUSL employers only </label><br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Address of the Working Place</label>
                    <div class="col-sm-8">
                        <textarea rows="3" cols="50" class="form-control"  name="working_add" placeholder="Permanent address"></textarea>
						<input type="text" class="form-control" name="working_City" placeholder="" >
						<input type="number" class="form-control" name="sp_postal_code" placeholder="" >
					</div>
                </div>
				
				<div class="form-group">
                    <div class="col-sm-2"> <label><a>Final Mark</a></label></div>
                    <div class="col-sm-2">
                     
                           <input type="text"  name="tb11" id="tb11" readonly="true"/>
                    </div>
                </div>
				
				
                <div class="form-group">
                    <label class="col-sm-3 control-label">Documents Attached relevant to the Articles 30 of the Constitution</label>
                    <div class="col-sm-6">
                        <label>Letter from the Employer</label> <input type="checkbox" name="empl" value="y"/>
						<div class="kv-avatar center-block">	
					        <input type="file" name="letterImage" id="letterImage">
					    </div>
                    </div>
                </div>

                <hr>
      			<div class="form-group">
                    <div class="col-sm-11 col-sm-offset-1">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="agree" value="agree"/> 
								 I hereby certify that the particulars submitted by me in this application are true and accurate.  I am aware that if any of these particulars are found to be false or inaccurate, I am liable to be disqualified before allocation for accommodation and to be vacated the accommodation by giving 01 (One) month notice if the inaccuracy is detected after appointment. Further, I noted that the last statement of the Article 33 will be imposed if I fail to vacate the accommodation assuming that the tenure is expired at the date of notice given by the SUSL.
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-success" name="submit" value="signup">Submit</button>
                    </div>
                </div>
				<hr>
                <table border="1" width="100%" height="150px" align="center">
                	<tr align="center">
                		<td></td>
                		<td><b>Applicant</b></td>
                		<td><b>Spouse</b></td>
                		<td><b>Final</b></td>
                	</tr>
                	<tr align="center">
                		<td><b>Designation</b></td>
                		<td><input type="text"  name="tb24" placeholder="0.00" id="tb24" readonly="true"/></td>
                		<td><input type="text"  name="tb25" placeholder="0.00" id="tb25" readonly="true"/></td>
                		<td><input type="text"  name="tb21" placeholder="0.00" id="tb21" readonly="true"/></td>
                	</tr>
                	<tr align="center">
                		<td><b>Distance</b></td>
                		<td><input type="text"  name="tbl3" placeholder="0.00" id="tbl3" readonly="true"/></td>
                		<td><input type="text"  name=""     placeholder="0.00" id="" readonly="true"/></td>
                		<td><input type="text"  name="tbl4" placeholder="0.00" id="tbl4" readonly="true"/></td>
                	</tr>
                	<tr align="center">
                		<td><b>Service</b></td>
                		<td><input type="text"  name="tb15"  placeholder="0.00" id="tb15"  readonly="true"/></td>
                		<td><input type="text"  name="tb100" placeholder="0.00" id="tb100"  readonly="true"/></td>
                		<td><input type="text"  name="tb22"  placeholder="0.00" id="tb22" readonly="true"/></td>
                	</tr>
                	<tr align="center">
                		<td><b>Duties</b></td>
                		<td><input type="text"  name="tb23" placeholder="0.00" id="tb23" readonly="true"/></td>
                		<td><input type="text"  name="" id="" placeholder="0.00" readonly="true"/></td>
                		<td><input type="text"  name="tb27" placeholder="0.00" id="tb27" readonly="true"/></td>
                	</tr>
					<tr align="center">
						<td colspan ="2" align="center"><b>Total</b><td>
						<td><input type="text"  name="tb26" placeholder="0.00" id="tbl26" readonly="true"/></td>
					</tr>
                </table>
            </form>
			<br><br><br>
        </div>
    </div>
</div>

 
<script>
/*$('##defaultForm')
   .find('[name="Desig"]')
     .selectpicker()
       .change(function(e) {
         $('##defaultForm').bootstrapValidator('revalidateField', 'Desig');
       })
       .end()
   .find('[name="Faculty"]')
     .selectpicker()
      .change(function(e) {
        $('##defaultForm').bootstrapValidator('revalidateField', 'Faculty');
      })
      .end()
   .bootstrapValidator({
      feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
      },
      excluded: ':disabled', // <=== Add the excluded option
      fields: {
         region: {
            validators: {
               notEmpty: { // <=== Use notEmpty instead of Callback validator
                  message: 'Please select region'
               }
            }
         }
         duration: {
             validators: {
                notEmpty: { // <=== Use notEmpty instead of Callback validator
                   message: 'Please select region.'
                }
             }
         }
      }
   }
 });*/


$(document).ready(function() {
    $('#defaultForm').bootstrapValidator({
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
                fullName: {
                    validators: {
                        notEmpty: {
                            message: 'Name required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z _]+$/,
                            message: 'Name contain invalid characters'
                        }
                    }
                },

                spouseName: {
                    validators: {
                        notEmpty: {
                            message: 'Name required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z _]+$/,
                            message: 'Name contain invalid characters'
                        }
                    }
                },
                initName: {
                    validators: {
                        notEmpty: {
                            message: 'Name required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z _.]+$/,
                            message: 'Name contain invalid characters'
                        }
                    }
                },
                address: {
                    validators: {
                        notEmpty: {
                            message: 'Address Required'
                        }
                    }
                },
                waddress:{
                    validators: {
                        notEmpty: {
                            message: 'Address Required'
                        }
                    }
                },
                nic:{
                    validators:{
                        notEmpty:{
                            message: 'NIC required'
                        },
                        regexp:{
                            regexp: /[0-9a-z]/,
                            message: 'NIC invalid'
                        }
                    }
                },
                
                gndiv: {
                    validators: {
                        notEmpty: {
                            message: 'GN division required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z _]+$/,
                            message: 'GN division  contain invalid characters'
                        }
                    }
                },
               dsdiv: {
                    validators: {
                        notEmpty: {
                            message: 'DS Division required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z _]+$/,
                            message: 'DS Division contain invalid characters'
                        }
                    }
                },
                district: {
                    validators: {
                        notEmpty: {
                            message: 'district required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z _]+$/,
                            message: 'district contain invalid characters'
                        }
                    }
                },
                spemp: {
                    validators: {
                        notEmpty: {
                            message: ' Employment required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z _]+$/,
                            message: 'Employment contain invalid characters'
                        }
                    }
                },
                sedy: {
                    validators: {
                        notEmpty: {
                            message: ' No of years required'
                        },
                        regexp: {
                            regexp: /[0-9]/,
                            message: 'Employment contain invalid characters'
                        }
                    }
                },
                servicepy: {
                    validators: {
                        notEmpty: {
						document.getElementById("servicepy").value=0;
                           // message: ' No of permanent years required'
                        },
                        regexp: {
                            regexp: /[0-9]/,
                            message: 'Employment contain invalid characters'
                        }
                    }
                }, 
                servicepm: {
                    validators: {
                        notEmpty: {
                            message: ' No of permanent months required'
                        },
                        regexp: {
                            regexp: /[0-9]/,
                            message: 'Employment contain invalid characters'
                        }
                    }
                },
                servicety: {
                    validators: {
                        notEmpty: {
                            message: ' No of temporary years required'
                        },
                        regexp: {
                            regexp: /[0-9]/,
                            message: 'Employment contain invalid characters'
                        }
                    }
                },
                servicetm: {
                    validators: {
                        notEmpty: {
                            message: ' No of temporary months required'
                        },
                        regexp: {
                            regexp: /[0-9]/,
                            message: 'Employment contain invalid characters'
                        }
                    }
                },
                dist: {
                    validators: {
                        notEmpty: {
                            message: ' distance required'
                        },
                        regexp: {
                            regexp: /[0-9]/,
                            message: 'Employment contain invalid characters'
                        }
                    }
                },
               sedm: {
                    validators: {
                        notEmpty: {
                            message: ' No of months required'
                        },
                        regexp: {
                            regexp: /[0-9]/,
                            message: 'Employment contain invalid characters'
                        }
                    }
                },

                appointmentd:{
                    validators:{
                        notEmpty:{
                            message: 'Appointment date required'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'email required'
                        },
                        regexp: {
                            regexp: /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i,
                            message: 'email is invalide'
                        }
                    }
                },
                gender: {
                    validators: {
                        notEmpty: {
                            message: 'Gender required'
                        }
                    }
                },
                mstatus:{
                    validators:{
                        notEmpty:{
                            message: 'Marital status required'
                        }
                    }
                },
                empstatus:{
                    validators:{
                        notEmpty:{
                            message: 'Employment status required'
                        }
                    }
                },
                houseid:{
                    validators:{
                        notEmpty:{
                            message: 'Select at least one house/room'
                        }
                    }
                },
                agree: {
                    validators: {
                        notEmpty: {
                            message: 'Check the agreement'
                        }
                    }
                },
                /*empl: {
                    validators: {
                        notEmpty: {
                            message: 'Check the whether Letter from the Employer is included'
                        }
                    }
                },
                gsl: {
                    validators: {
                        notEmpty: {
                            message: 'Check the  whether Letter from the GN  is included'
                        }
                    }
                }*/
            }
        });
    });
$("#signup").click( function() {
        $.ajax({
            type:'POST',
            url: 'spcontrol.php',
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
    });
</script>

 
<script>
/*$('##defaultForm')
   .find('[name="Desig"]')
     .selectpicker()
       .change(function(e) {
         $('##defaultForm').bootstrapValidator('revalidateField', 'Desig');
       })
       .end()
   .find('[name="Faculty"]')
     .selectpicker()
      .change(function(e) {
        $('##defaultForm').bootstrapValidator('revalidateField', 'Faculty');
      })
      .end()
   .bootstrapValidator({
      feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
      },
      excluded: ':disabled', // <=== Add the excluded option
      fields: {
         region: {
            validators: {
               notEmpty: { // <=== Use notEmpty instead of Callback validator
                  message: 'Please select region'
               }
            }
         }
         duration: {
             validators: {
                notEmpty: { // <=== Use notEmpty instead of Callback validator
                   message: 'Please select region.'
                }
             }
         }
      }
   }
 });*/


$(document).ready(function() {
    $('#defaultForm1').bootstrapValidator({
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
                fullName: {
                    validators: {
                        notEmpty: {
                            message: 'Name required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z _]+$/,
                            message: 'Name contain invalid characters'
                        }
                    }
                },
                

                spouseName: {
                    validators: {
                        notEmpty: {
                            message: 'Name required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z _]+$/,
                            message: 'Name contain invalid characters'
                        }
                    }
                },
                initName: {
                    validators: {
                        notEmpty: {
                            message: 'Name required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z _.]+$/,
                            message: 'Name contain invalid characters'
                        }
                    }
                },
                address: {
                    validators: {
                        notEmpty: {
                            message: 'Address Required'
                        }
                    }
                },
                
                nic:{
                    validators:{
                        notEmpty:{
                            message: 'NIC required'
                        },
                        regexp:{
                            regexp: /[0-9a-z]/,
                            message: 'NIC invalid'
                        }
                    }
                },
                
                gndiv: {
                    validators: {
                        notEmpty: {
                            message: 'GN division required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z _]+$/,
                            message: 'GN division  contain invalid characters'
                        }
                    }
                },
               dsdiv: {
                    validators: {
                        notEmpty: {
                            message: 'DS Division required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z _]+$/,
                            message: 'DS Division contain invalid characters'
                        }
                    }
                },
                district: {
                    validators: {
                        notEmpty: {
                            message: 'district required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z _]+$/,
                            message: 'district contain invalid characters'
                        }
                    }
                },
                /*waddress:{
                    validators: {
                        notEmpty: {
                            message: 'Address Required'
                        }
                    }
                },
                spemp: {
                    validators: {
                        notEmpty: {
                            message: ' Employment required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z _]+$/,
                            message: 'Employment contain invalid characters'
                        }
                    }
                },
                sedy: {
                    validators: {
                        notEmpty: {
                            message: ' No of years required'
                        },
                        regexp: {
                            regexp: /[0-9]/,
                            message: 'Employment contain invalid characters'
                        }
                    }
                },
                servicepy: {
                    validators: {
                        notEmpty: {
                            message: ' No of permanent years required'
                        },
                        regexp: {
                            regexp: /[0-9]/,
                            message: 'Employment contain invalid characters'
                        }
                    }
                }, 
                servicepm: {
                    validators: {
                        notEmpty: {
                            message: ' No of permanent months required'
                        },
                        regexp: {
                            regexp: /[0-9]/,
                            message: 'Employment contain invalid characters'
                        }
                    }
                },
                servicety: {
                    validators: {
                        notEmpty: {
                            message: ' No of temporary years required'
                        },
                        regexp: {
                            regexp: /[0-9]/,
                            message: 'Employment contain invalid characters'
                        }
                    }
                },
                servicetm: {
                    validators: {
                        notEmpty: {
                            message: ' No of temporary months required'
                        },
                        regexp: {
                            regexp: /[0-9]/,
                            message: 'Employment contain invalid characters'
                        }
                    }
                },
                dist: {
                    validators: {
                        notEmpty: {
                            message: ' distance required'
                        },
                        regexp: {
                            regexp: /[0-9]/,
                            message: 'Employment contain invalid characters'
                        }
                    }
                },
               sedm: {
                    validators: {
                        notEmpty: {
                            message: ' No of months required'
                        },
                        regexp: {
                            regexp: /[0-9]/,
                            message: 'Employment contain invalid characters'
                        }
                    }
                },

                appointmentd:{
                    validators:{
                        notEmpty:{
                            message: 'Appointment date required'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'email required'
                        },
                        regexp: {
                            regexp: /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i,
                            message: 'email is invalide'
                        }
                    }
                },
                gender: {
                    validators: {
                        notEmpty: {
                            message: 'Gender required'
                        }
                    }
                },
                mstatus:{
                    validators:{
                        notEmpty:{
                            message: 'Marital status required'
                        }
                    }
                },
                empstatus:{
                    validators:{
                        notEmpty:{
                            message: 'Employment status required'
                        }
                    }
                },
                houseid:{
                    validators:{
                        notEmpty:{
                            message: 'Select at least one house/room'
                        }
                    }
                },
                agree: {
                    validators: {
                        notEmpty: {
                            message: 'Check the agreement'
                        }
                    }
                },
                empl: {
                    validators: {
                        notEmpty: {
                            message: 'Check the whether Letter from the Employer is included'
                        }
                    }
                },
                gsl: {
                    validators: {
                        notEmpty: {
                            message: 'Check the  whether Letter from the GN  is included'
                        }
                    }
                }*/
            }
        });
    });
$("#signup").click( function() {
        $.ajax({
            type:'POST',
            url: 'hc.php',
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
    });
</script>
<?php
}
?>
</body>
</html>