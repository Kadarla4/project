
<style>
.green{color:#2FC332;}                 
.red{color:#D60202;font-weight:normal}
.g{color:green;
	font-style: italic;text-decoration: underline;}	
</style><!-- here getelementbyid("").style="display:none"......mean get element of id " " and change its style  from display: none to block or none itself-->
<?php
 //connected to database....
$link=mysqli_connect("localhost","root","","intern") or die("Database can not be connected."); 

if(!empty($_POST['username'])){
	
	//taken eid as username
	$result=mysqli_query($link,"select * from companies where c_id='".$_POST["username"]."'") or die("failed to query database".mysqli_error($link));
	if(mysqli_num_rows($result)>0)
	{
		//checking validation
		echo "<span class='glyphicon glyphicon-remove red'>  Not Available. </span>";
		$v=$_POST["username"].mt_rand(0,10000);
		
		$select = mysqli_query($link,"select * from companies where c_id='$v'");
		{
		if(mysqli_num_rows($select)>0)
		{
		$vv=$_POST["username"].mt_rand(0,50000);
		$select2 = mysqli_query($link,"select * from companies where c_id='$vv'");
		{
		if(mysqli_num_rows($select2)>0)
		{
		$vvv=$_POST["username"].mt_rand(0,100000);//suggesting a number
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbs&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='g'> Try This name= &#39; $vvv &#39; </span>";
		/*echo "<script>document.getElementById('lcname').style.display='none'</script>";
		echo "<script>document.getElementById('ename').style.display='none'</script>";
		
		echo "<script>document.getElementById('lcname').style.display='none'</script>";
		echo "<script>document.getElementById('cname').style.display='none'</script>";
		
		echo "<script>document.getElementById('lpos').style.display='none'</script>";
		echo "<script>document.getElementById('pos').style.display='none'</script>";
		
		echo "<script>document.getElementById('lcity').style.display='none'</script>";
		echo "<script>document.getElementById('city').style.display='none'</script>";
		
		echo "<script>document.getElementById('lpass').style.display='none'</script>";
		echo "<script>document.getElementById('pass').style.display='none'</script>";
		echo "<script>document.getElementById('submit').style.display='none'</script>";*/
		}
	else{		
		/*echo "<script>document.getElementById('lename').style.display='none'</script>";
		echo "<script>document.getElementById('ename').style.display='none'</script>";
		
		/*echo "<script>document.getElementById('lcname').style.display='none'</script>";
		echo "<script>document.getElementById('cname').style.display='none'</script>";
		
		echo "<script>document.getElementById('lpos').style.display='none'</script>";
		echo "<script>document.getElementById('pos').style.display='none'</script>";
		
		echo "<script>document.getElementById('lcity').style.display='none'</script>";
		echo "<script>document.getElementById('city').style.display='none'</script>";
		
		echo "<script>document.getElementById('lpass').style.display='none'</script>";
		echo "<script>document.getElementById('pass').style.display='none'</script>";
		echo "<script>document.getElementById('submit').style.display='none'</script>";*/
		}
		
		}
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='g'>Try This name= &#39; $vv &#39; </span>";
		/*echo "<script>document.getElementById('lename').style.display='none'</script>";
		echo "<script>document.getElementById('ename').style.display='none'</script>";
		
		/*echo "<script>document.getElementById('lcname').style.display='none'</script>";
		echo "<script>document.getElementById('cname').style.display='none'</script>";
		
		echo "<script>document.getElementById('lpos').style.display='none'</script>";
		echo "<script>document.getElementById('pos').style.display='none'</script>";
		
		echo "<script>document.getElementById('lcity').style.display='none'</script>";
		echo "<script>document.getElementById('city').style.display='none'</script>";
		
		echo "<script>document.getElementById('lpass').style.display='none'</script>";
		echo "<script>document.getElementById('pass').style.display='none'</script>";
		echo "<script>document.getElementById('submit').style.display='none'</script>";*/
		}
		else
		{
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='g'> Try This name= &#39; $v &#39; </span>";
		/*echo "<script>document.getElementById('lename').style.display='none'</script>";
		echo "<script>document.getElementById('ename').style.display='none'</script>";
		
	/*	echo "<script>document.getElementById('lcname').style.display='none'</script>";
		echo "<script>document.getElementById('cname').style.display='none'</script>";
		
		echo "<script>document.getElementById('lpos').style.display='none'</script>";
		echo "<script>document.getElementById('pos').style.display='none'</script>";
		
		echo "<script>document.getElementById('lcity').style.display='none'</script>";
		echo "<script>document.getElementById('city').style.display='none'</script>";
		
		echo "<script>document.getElementById('lpass').style.display='none'</script>";
		echo "<script>document.getElementById('pass').style.display='none'</script>";
		echo "<script>document.getElementById('submit').style.display='none'</script>";*/
		}
		}
	}
	else
	{
		echo "<span class='glyphicon glyphicon-ok g'>Username Available.</span>";	
		echo "<script>document.getElementById('lc_name').style.display='block'</script>";
		echo "<script>document.getElementById('c_name').style.display='block'</script>";
		
		echo "<script>document.getElementById('lcname').style.display='block'</script>";//mail
		echo "<script>document.getElementById('cname').style.display='block'</script>";
		
		echo "<script>document.getElementById('lstate').style.display='block'</script>";
	   echo "<script>document.getElementById('state').style.display='block'</script>";
	
		echo "<script>document.getElementById('lccity').style.display='block'</script>";
		echo "<script>document.getElementById('ccity').style.display='block'</script>";
		
		echo "<script>document.getElementById('lcpass').style.display='block'</script>";
		echo "<script>document.getElementById('cpass').style.display='block'</script>";
		echo "<script>document.getElementById('submit').style.display='block'</script>";
	}
	
	
}


else
{
		/*echo "<script>document.getElementById('lename').style.display='none'</script>";
		echo "<script>document.getElementById('ename').style.display='none'</script>";
		
		/*echo "<script>document.getElementById('lcname').style.display='none'</script>";
		echo "<script>document.getElementById('cname').style.display='none'</script>";
		
		echo "<script>document.getElementById('lpos').style.display='none'</script>";
		echo "<script>document.getElementById('pos').style.display='none'</script>";
		
		echo "<script>document.getElementById('lcity').style.display='none'</script>";
		echo "<script>document.getElementById('city').style.display='none'</script>";
		
		echo "<script>document.getElementById('lpass').style.display='none'</script>";
		echo "<script>document.getElementById('pass').style.display='none'</script>";
		echo "<script>document.getElementById('submit').style.display='none'</script>";*/
}

?>