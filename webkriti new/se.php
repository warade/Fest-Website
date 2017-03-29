<?php
	require 'coreinc.php'; 
	$db=mysqli_connect("localhost","root","","usrinfo");
	
	if(isset($_SESSION['id'])&&!empty($_SESSION['id'])){
	header("Location: index.php");
}
else{
	header("Location: logi_page.html");
}
 ?>