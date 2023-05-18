<?php
	session_start();
	if(isset($_POST['jid']) && isset($_SESSION['username']))

		{
		$link=mysqli_connect("localhost","root","","intern") or die("Database can not be connected.");
		$username=$_SESSION['username'];
		$p=$_POST['jid'];
		if($resut=mysqli_query($link,"delete from application where  i_id='$p'and user_s_name='$username'")or die("failed to query database".mysqli_error($link)))

		//if($result=mysqli_query($link,"update internship set uname='0' where jid='".$_POST["jid"]."'") or die("failed to query database".mysqli_error($link)))
			echo "APPLICATION REQUEST DELETED SUCCESSFULLY";
		else 
			echo "SOMETHING WENT WRONG";

		}
	
	// here we have just deleted the row or the record from table of application only ....the one that is appiled by the student...thats all
	// the session variable is set while login and jid sent from appliedjobs.php ...these are the details to delete the applied  internship
	
	else 
	header("location:studentlogin.php");

?>