<?php
session_start();
if(isset($_SESSION['empname'])){
    session_unset();
    session_destroy();
}
	echo"<script>location.href='emplogin.php'</script>";	//after detsroying the session it is redirecteded  to emplogin.php
//unsetting the session variable and ending the session;
?>