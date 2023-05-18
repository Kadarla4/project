<?php
	session_start();
	if(isset($_POST['jid']) && isset($_SESSION['empname']))

		{
		$link=mysqli_connect("localhost","root","","intern") or die("Database can not be connected.");
		$username=$_SESSION['empname'];
		$p=$_POST['jid'];
		if($result=mysqli_query($link,"delete from internship where eid='$username' and jid='$p'") or die("failed to query database".mysqli_error($link)))
			echo "JOB POST DELETED SUCCESSFULLY";
		else 
			echo "SOMETHING WENT WRONG";

		}
	
	
	else 
	header("location:emplogin.php");

?>