
<style>
.green{color:#2FC332;}                 
.red{color:#D60202;font-weight:normal}
.g{color:green;
	font-style: italic;text-decoration: underline;}	
</style>
<?php     //check page called from empreg.php 
           //it checks whether the company is present in database or not...if so it only displalys the empid block ...if it is valid then rest of them are appeared
//ajax is used to do this work without refreshing the page .....
           $link=mysqli_connect("localhost","root","","intern") or die("database can not be connected");
if(!empty($_POST['name'])){
      $result=mysqli_query($link,"select*from companies where c_id='".$_POST["name"]."'") or die("failed to query database".mysqli__error($link));
        if(mysqli_num_rows($result)==0)
       {
        echo"<span class='glyphicon glyphicon-remove-red'>no company registered</span> ";

        echo"<script>document.getElementById('leid').style.display='none'</script>";
        echo"<script>document.getElementById('eid').style.display='none'</script>";

        echo"<script>document.getElementById('lename').style.display='none'</script>";
        echo"<script>document.getElementById('ename').style.display='none'</script>";
echo"<script>document.getElementById('lpos').style.display='none'</script>";
echo "<script>document.getElementById('pos').style.display='none'</script>";
		
echo "<script>document.getElementById('lcity').style.display='none'</script>";
echo "<script>document.getElementById('city').style.display='none'</script>";

echo "<script>document.getElementById('lpass').style.display='none'</script>";
echo "<script>document.getElementById('pass').style.display='none'</script>";
echo "<script>document.getElementById('submit').style.display='none'</script>";

}
elseif(mysqli_num_rows($result)>0){

   echo"<span class='glyphicon glyphicon-remove-red'> company registered</span> ";
  // echo"<script>document.getElementById('lpos').style.display='block'</script>"; 
  // echo"<script>document.getElementById('pos').style.display='block'</script>";
   echo"<script>document.getElementById('leid').style.display='block'</script>";
    echo"<script>document.getElementById('eid').style.display='block'</script>";
   


}
}
else{

   
   echo"<script>document.getElementById('leid').style.display='none'</script>";
    echo"<script>document.getElementById('eid').style.display='none'</script>";
    echo"<script>document.getElementById('lename').style.display='none'</script>";
    echo"<script>document.getElementById('ename').style.display='none'</script>";
echo"<script>document.getElementById('lpos').style.display='none'</script>";
echo "<script>document.getElementById('pos').style.display='none'</script>";
    
echo "<script>document.getElementById('lcity').style.display='none'</script>";
echo "<script>document.getElementById('city').style.display='none'</script>";

echo "<script>document.getElementById('lpass').style.display='none'</script>";
echo "<script>document.getElementById('pass').style.display='none'</script>";
echo "<script>document.getElementById('submit').style.display='none'</script>";



}?>