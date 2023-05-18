
<!DOCTYPE html>
<html>
<head>
	
	
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  
   <link href="img/job.png" rel="icon">
   <link href="img/job.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  
 
  
	
	<link href="css/style.css" rel="stylesheet">
	
    <style>
		
		
        body{
            background: url("https://www.svgbackgrounds.com/wp-content/uploads/2021/05/protruding-squares-orange-background.png");
            background-size:cover;
            background-repeat:no-repeat;
            color:black;
        }
		
		table,th,td{
			margin: auto;
			border: none;
			border-radius: 20px;
			border-collapse: collapse;
			text-align: center;
			font-size: 16px;
			table-layout: auto;
			background-color:white;
			color: black;
			margin-top: 100px;
		}
		
		th,td{
			padding: 20px;
			opacity: 0.9;
			color: black;
			
		}
		
		th{
			background-color: darkblue;
			color: white;	
		}
		
		
		td:hover
		{
			background-color: cornflowerblue;
			color: black;
		}
		
		tr:hover{
			background-color: black;
		}
		
		
		.pic{
	width:250px;
	height:250px;
}
.picbig{
	position: relative;
	width:0px;
	-webkit-transition:width 0.3s linear 0s;
	transition:width 0.3s linear 0s;
	z-index:10;
}
.pic:hover + .picbig{
	width:500px;
	height: 500px;
}
		
		
		
    </style>
</head>
<body id="back">
	<br><br><br><br>
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
		
        <h1><a href="#intro" class="scrollto" >Internships List Is Here</a></h1>
      </div>
		
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="home.php">Home</a></li>
          <li><a href="emplogin.php">Employee Login</a></li>
          <li><a href="studentlogin.php">Student Login</a></li>
		 <li  class="menu-active"><a href="jobs.php">Find Internships</a></li>
        </ul>
      </nav>
    </div>
	</header>	
	
	
	
    <div style="text-align:center">
	<br><br>
	<br>
        <h3 style="font-weight:bold" >Available Internship List</h3>
		<!--<div align="center"><button type="button" class="btn btn-primary" onClick="window.print();"><span class="glyphicon glyphicon-print"></span>  Print Details </button></div>
--><form method="POST">
    <div style="text-align: right">
	<label>Search: </label>	
    <input type="text" placeholder="Type To Search" name="key" autocomplete="off" style="border-right:none; border-left: none; border-top:none;outline: none;border-bottom: 1px solid white;background-color:transparent; color: black"  >
			
			 <button type="submit" class="btn btn-info btn-xs" name="sub" >
     			 <span class="glyphicon glyphicon-search"></span> Search
   					 </button>
		</form>
		
		
		</div>
    </div>
	
	
	
	
   <table style="width:100%;"> 
	   
        <thead>
            <tr>
                <th style="width:10%;"><h4>Job Id</h4></th>
                <th style="width:10%;"><h4>Company Name</h4></th>
				<th style="width:10%;"><h4>Contact email</h4></th>
				<th style="width:10%;"><h4>Job Description</h4></th>
				<th style="width:10%;"><h4>city</h4></th>
				<th style="width:10%;"><h4>state</h4></th>
				<th style="width:10%;"><h4>address</h4></th>
				<!--<th style="width:10%;"><h4>state</h4></th>-->
				<th style="width:10%;"><h4>Job Salary</h4></th>
				<th style="width:10%;"><h4>expires on</h4></th>
                <th style="width:10%;"><h4>Action</h4></th>
				<!--<th style="width:10%;"><h4>description</h4></th>-->
            </tr>
        </thead>
        <tbody>
            <?php
			
			
			//if we click search button....displays specified internships.....
			
			if(isset($_POST['sub']))
				{

					$link=mysqli_connect("localhost","root","","intern") or die($link);
					$k=$_POST['key'];

			$k=mysqli_real_escape_string($link,$k);
			
			$result=mysqli_query($link,"select internship.*,companies.*, cities.*,states.* from internship join companies on cid=c_id join cities on cit_id=city_id join states on stat_id=state_id where name like '%".$k."%' or c_email like '%".$k."%'  or jdesc like '%".$k."%'  or loc like '%".$k."%' or address like '%".$k."%' or state_name like '%".$k."%'  or sal like '%".$k."%'") or die("failed to query database".mysqli_error($link));
			if ($result->num_rows > 0)                                                                                                                                                                                        //or uname like '%".$username."%'                               
			{
				while($row = $result->fetch_assoc()) 
				{
					$jid=$row['jid'];
				
		
					 echo "<tr><td><form action='' method='post'>".$row['jid']."<td>".$row['name']."<td>".$row['c_email']."<td>".$row['jdesc']."<td>".$row['loc']."<td>".$row['state_name']."<td>".$row['address']."<td>".$row['state_name']."<td>".$row['sal']."</td><td>".
						
					 "<button type='submit' class='btn btn-xs btn-success' name='_view'>Apply</button><br><br></form>";
					// "<button type='submit' class='btn btn-xs btn-success' name='_view'>description</button></form>";
					if(isset($_POST['_view']))
					 {
						
						
						
						
					echo"<script>alert('Login First')</script>";
					echo "<script>location.href='mainjobs.php'</script>";
					 }
				}
			}
			
			else
			{
				echo "<tr><td colspan='7' class='box-sm'><h4 class='page-header'>No Job Found</h4></td></tr>";
			}
			
			
				
	
			}
			//displays available  [date wise] internships......
			else if(!isset($_POST['sub']))
			{ //connecting to the database
				$conn=mysqli_connect("localhost","root","","intern") or die("connection failed".mysqli_connect_error());
                $query = "select internship.*,companies.*,cities.*,states.* from internship join companies on cid=c_id join cities on cit_id=city_id join states on stat_id=state_id" ;// query...

                $result = $conn->query($query);//executing the query
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {//fetching row by row records ......method post mean submitting the data to the same page 
                         $currentdate=date('Y-m-d');
						 if($currentdate<=$row['exp_date'])
						echo "<tr><td><form action='mainjobs.php' method='post'>".$row['jid']."<td>".$row['name']."<td>".$row['c_email']."<td>".$row['jdesc']."<td>".$row['loc']."<td>".$row['state_name']."<td>".$row['address']."<td>".$row['sal']."<td>".$row['exp_date']."</td><td>".
                            "<button type='submit' class='btn btn-xs btn-success' name='_view'>Apply</button><br><br></form>";
							//"<button type='submit' class='btn btn-xs btn-success' name='_view'>description</button></form>";
	// if apply button is clicked .. the form is submitted to the same page ....by HTTP method 'post'...
						 if(isset($_POST['_view'])) 
						 { // if apply is clicked '_view' would be set and it redirects to student login page and immedaitely after logging in it rediretcs to mainjobs.php
						echo"<script>alert('Login First')</script>";
						echo "<script>location.href='mainjobs.php'</script>";

						 }
						
                    }
                }
				
				
				
				else 
				{// printing no job found combining allth data columns...colspan=7...
					echo "<tr><td colspan='7' class='box-sm'><h4 class='page-header'>No Job Found</h4></td></tr>";
				}
				
			}  
			
			
                
                else
				{
                    echo "<tr><td colspan='7' class='box-sm'><h4 class='page-header'>No Job Found</h4></td></tr>";
                }
			   
			   ?>
			
		

        </tbody>
    </table>
    </form>
	<!--
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
  <script src="contactform/contactform.js"></script>-->

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/main.js"></script>
</body>
<!--
/*	$link=mysqli_connect("localhost","root","","intern") or die($link);
						$k=$_POST['key'];
	
				$k=mysqli_real_escape_string($link,$k);

				$result=mysqli_query($link,"select * from job where cname like '%".$k."%' or jdesc like '%".$k."%'  or jpost like '%".$k."%'  or loc like '%".$k."%'  or sal like '%".$k."%'") or die("failed to query database".mysqli_error($link));
                if ($result->num_rows > 0) 
				{
                    while($row = $result->fetch_assoc()) 
					{
                         echo "<tr><td><form action='mainjobs.php' method='post'>".$row['jid']."<td>".$row['cname']."<td>".$row['jdesc']."<td>".$row['loc']."<td>".$row['loc']."<td>".$row['sal']."</td><td>".
                            "<button type='submit' class='btn btn-xs btn-success' name='_view'>Apply</button></form> <br> <br>";
						if(isset($_POST['_view']))
						 {
						echo"<script>alert('Login First')</script>";
						echo "<script>location.href='mainjobs.php'</script>";
						 }
                    }
                }
				
				else
				{
					echo "<tr><td colspan='7' class='box-sm'><h4 class='page-header'>No Job Found</h4></td></tr>";
				}
				
				*/-->
</html>

