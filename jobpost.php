<?php
	session_start();
	if(!isset($_SESSION['empname'])){   // authentication of emp login status 
		header("location:emplogin.php");
	}
?>
<!DOCTYPE html>
<html>
	
<head>
	
 
	<meta charset="utf-8">
  <title>post internship</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  
  <link href="img/job.png" rel="icon">
   <link href="img/job.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  
  <link href="css/style.css" rel="stylesheet">
    <style>
        body{
            background: url("https://www.design.svgbackgrounds.com/wp-content/uploads/2021/05/liquid-cheese-yellow-background.png");
            background-size:cover;
            background-repeat:repeat-y;
            color:black;
        }
        .box{
            background: rgba(0,0,0,0.1);
        }
        .add_employee_form span{
            color:red;
        }
		
		
        p{
            color:red;
        }
		
		.form-control input[type="text"]
		{
			color: blue;
		}
		
		
        .box{border:1px solid lightgrey;padding:20px;border-radius:5px;}
        .box-sm{border:1px solid lightgrey;padding:5px;border-radius:5px;background-color:white;}
    </style>
	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	
	<script>
		
		function usernamecheck() {  //checking the availability of internship id  
			
	$("#loaderIcon").show();  //  shows loader icon till  process is done  
	jQuery.ajax({                   //without refreshing the page ...using ajax method 
	url: "check3.php",
	data:'username='+$("#jid").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status").html(data);
		$("#loaderIcon").hide();             //hiding the loading spinner
		
	},
	
	error:function (){}
	});
}
</script>
	
	
    
</head>
<body> 
	<br><br><br><br><br>
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">post internship</a></h1>
      </div>
		
      <nav id="nav-menu-container">
        <ul class="nav-menu">
        <!--  <li><a href="empwelcome.php">Employee Home</a></li>-->
          <li class="menu-active"><a href="jobpost.php">Post A Internship</a></li>
          <li><a href="empjobstatus.php">Internship Application Status</a></li>
		  <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>	
	
	<br><br>
	
	
    

    
    <div style="text-align:center">
    <h3 class="page-header" style="font-weight:bold">Internship Post Form</h3>
    </div>
    <br><br>
    
    <div class="container add_employee_form">
    <form action="" method="POST">
        <h4 class="page-header" align="center" style="font-weight:bold">Fill The Form</h4>
        <div class="box">
            <div class="form-group">  
                  <div class="row">

                     <div class="col-md-2"><label id="ljid">Internship ID<span>&#42;</span></label></div>
                     <div class="col-md-3"><input type="text" class="form-control" id="jid" placeholder="Ex: j1" name="jid" onBlur="usernamecheck()" required>
						 <span id='user-availability-status'></span>                                                       <!--onBlur="usernamecheck()"   to check the validity of username-->
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="right"></span> </div>                 
                     <div class="col-md-3 text-right"><label id="ljname" style="display: none">&nbsp;&nbsp;Company&nbsp;id<span>&#42;</span></label></div>
                     <div class="col-md-3"><input type="text" class="form-control" id="jname" placeholder="Enter Your name" name="jname" style="display: none" required></div>    
                       
                  </div>
                
                  <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3"><p id="errfname"></p> </div>
                        <div class="col-md-2"><label id="ladd" style="display:none">address<span>&#42;</span></label></div>
                        <div class="col-md-3"><textarea class="form-control" id="add" name="add" style="display:none" required></textarea><!--<p id="errlname"></p>--></div>
                  </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-2 text-right"><label id="ljdesc" style="display: none">&nbsp;&nbsp;Internship Description<span>&#42;</span></label></div>
                    <div class="col-md-3"><textarea class="form-control" id="jdesc" placeholder="Write About This Internship" name="jdesc" style="display: none" required></textarea> </div>
					<div class="col-md-3 text-right">
                    <label id="lcity" style="display: none">City Name<span>&#42;</span></label></div>
                    <div class="col-md-3"> 
                        <input list="country_list" name="city" id="city" class="form-control" placeholder="Enter City name" style="display: none" required >
                        <datalist id="country_list">
                        <?php  include("city_list.php"); ?>
                        </datalist>
                    </div>					
                </div>
				
				 <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5"><p id="erruname"></p></div>
                </div>
				<div class="form-group">
                <div class="row">
                   <div class="col-md-2 text-right"><label id="lpost" style="display: none">&nbsp;&nbsp;last_avail_date<span>&#42;</span></label></div>
                    <div class="col-md-3"><input type="date" name="post" id="post" class="form-control" placeholder="expire date" style="display: none" required > </div>
					<div class="col-md-3 text-right">
                    <label id="lsal" style="display: none">Salary<span>&#42;</span></label></div>
                    <div class="col-md-3"> 
                        <input type="text" name="sal" id="sal" class="form-control" placeholder="Enter Salary" onkeypress="return( event.charCode >47 && event.charCode < 58)" style="display: none" required >
                        
                        </datalist>
                    </div>					
                </div>
				
				
				
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5"><p id="erruname"></p></div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                <div class="col-md-2 text-right"><label id="lp" style="display:none">&nbsp;&nbsp;link<span>&#42;</span></label></div>
                    <div class="col-md-3"><input type="url" name="lin" id="lin" class="form-control" placeholder="group link" style="display:none" required > </div>
                    
                </div>
              
            </div>

            <div class="form-group">
                <div class="row">
                    
	
                    </div> 
					
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5"> <p id="erremail"></p></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"><p id="errnationality"></p></div>
                </div>
            </div>

             <div class="form-group">
                <div class="row">
                  
                 </div>
            </div>
        </div>
        
        <br><br>
        
        <div class="form-group">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <button class="btn btn-success btn-lg btn-outline-* btn-block" id="submit" name="submit" style="display: none" >Post Job</button>
                </div>
				<div class="col-md-4"></div>
            </div>
        </div>
    </form>
    </div>
    
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/main.js"></script>
	
	
</body>
</html>



<?php

if(isset($_POST['submit']))
{ 
    $jid = $_POST['jid'];
    $jname = $_POST['jname'];//company id
   
    $jdesc = $_POST['jdesc'];
    $address=$_POST['add'];
    $date=$_POST['post'];
    //$c_email = $_POST['post'];//removing it
   
    $city = $_POST['city'];
    
    $sal = $_POST['sal'];
	$eid= $_SESSION['empname'];
	$l=$_POST['lin'];
	
    $conn = mysqli_connect("localhost","root","","intern") or die("failed to connect database");

    $jid = mysqli_real_escape_string($conn,$jid);
	$jname = mysqli_real_escape_string($conn,$jname);
	
	$jdesc = mysqli_real_escape_string($conn,$jdesc);
    $address=mysqli_real_escape_string($conn,$address);
	
	//$c_email = mysqli_real_escape_string($conn,$c_email);
	
	$city = mysqli_real_escape_string($conn,$city);
	
	$sal = mysqli_real_escape_string($conn,$sal);
	
	$eid = mysqli_real_escape_string($conn,$eid);
    $l= mysqli_real_escape_string($conn,$l);
$c="yes";
    $result = mysqli_query($conn,"insert into internship values ('$jid','$jdesc','$city','$sal','$eid','$address','$jname','$date','$l','$c')") or die("Query Failed".mysqli_error($conn));
	echo "<script>alert('Job Posted Successfully')</script>";
}

?>
