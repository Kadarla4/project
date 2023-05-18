<style>
.green{color:#2FC332;}                 
.red{color:#D60202;font-weight:normal}
.g{color:green;
	font-style: italic;text-decoration: underline;}	
</style>
<?php
if(!empty($_POST['email']))
{ 
     //$mail=$_POST['email'];
     $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
     $required_domain = "@student.nitandhra.ac.in";
     //to increase th restriction we need connect to database of collge email id .... to verify ...



     if (substr($email, -strlen($required_domain)) === $required_domain){

      $link=mysqli_connect("localhost","root","","intern") or die("database can not be connected");
      $result=mysqli_query($link,"select*from student where s_email='".$email."'") or die("failed to query database".mysqli__error($link));
    
      if($result->num_rows>0)
    {
      echo "registered email";
    }

    else{
       // echo "<span class='glyphicon glyphicon-remove red'>student of nitap. </span>";
        echo "<script>document.getElementById('submit').style.display='block'</script>";
        echo "<script>document.getElementById('lpass').style.display='block'</script>";
        echo "<script>document.getElementById('pass').style.display='block'</script>";
       // echo "<script>document.getElementById('submit').style.display='block'</script>";
    }

    }
   else{
      
   
    echo "<span class='glyphicon glyphicon-remove red'> not a student of nitap. </span>";
    echo "<script>document.getElementById('submit').style.display='none'</script>";
   echo "<script>document.getElementById('lpass').style.display='none'</script>";
    echo "<script>document.getElementById('pass').style.display='none'</script>";}
   }




   if(!empty($_POST['mobile'])){
      $m=$_POST['mobile'];
      $link=mysqli_connect("localhost","root","","intern") or die("database can not be connected");
      $result=mysqli_query($link,"select*from student where mobile='".$m."'") or die("failed to query database".mysqli__error($link));
      if($result->num_rows>0)
      {echo"mobile number exists";
      
         echo "<script>document.getElementById('lemail').style.display='none'</script>";
         echo "<script>document.getElementById('semail').style.display='none'</script>";
      }
      else{
         echo "<script>document.getElementById('lemail').style.display='block'</script>";
        echo "<script>document.getElementById('semail').style.display='block'</script>";
      }

   }
   












?>