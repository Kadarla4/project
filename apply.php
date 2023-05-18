<?php
	session_start();
	if(isset($_POST['jid']) && isset($_SESSION['username']))
 // this conditon explains that student had logged in"isset username" and is applying internships"isset "jid" "
		{



		
		
		$conn=mysqli_connect("localhost","root","","intern") or die("connection failed".mysqli_connect_error());
         $v=0;
         $i_id=$_POST['jid'];
		 $user_s_name=$_SESSION['username'];
		 $query ="select * from application ";
		 $r= $conn->query($query);
		 if($r->num_rows > 0)
		 {
		   $res="select *from application where user_s_name='$user_s_name' and i_id='$i_id'";
		   $qq= $conn->query($res);
		   if($qq->num_rows>0)
		   {
			echo"already applied";
		   }
		   else{
		$i_id=mysqli_real_escape_string($conn,$i_id);
		$user_s_name=mysqli_real_escape_string($conn,$user_s_name);
		$currentdate=date('Y-m-d');
         $q="select *from internship";
		 $r1=$conn->query($q);
		 $ed=0;
		 while($rr=$r1->fetch_assoc())
		 {
			if($rr['jid']==$i_id)
                 $ed=$rr['exp_date'];
		 }
		
		  $result=mysqli_query($conn,"INSERT INTO application VALUES ('$i_id','$user_s_name','$currentdate','','$ed')")or die("query failed".mysqli_error($conn));
		  echo "JOB APPLIED SUCCESSFULLY";
			mysqli_close($conn);
	}

}


		  
	  else{
         $i_id=mysqli_real_escape_string($conn,$i_id);
		 $user_s_name=mysqli_real_escape_string($conn,$user_s_name);
		 $currentdate=date('Y-m-d');
         $q="select *from internship";
		 $r1=$conn->query($q);
		 $ed=0;
		 while($rr=$r1->fetch_assoc())
		 {
			if($rr['jid']==$i_id)
                 $ed=$rr['exp_date'];
		 }
           $result=mysqli_query($conn,"INSERT INTO application VALUES ('$i_id','$user_s_name','$currentdate','','$ed')")or die("query failed".mysqli_error($conn));
		   echo "JOB APPLIED SUCCESSFULLY";
			 mysqli_close($conn);
	  }

		} 
	
	
	else 
	header("location:studentlogin.php");
	

?>
