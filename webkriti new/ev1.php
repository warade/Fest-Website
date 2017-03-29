<?php 
require 'coreinc.php';
$db=mysqli_connect("localhost","root","","usrinfo");
if(isset($_SESSION['id'])&&!empty($_SESSION['id'])){
	$i=$_SESSION['id'];
	$query="SELECT ev1 FROM users WHERE id='$i'";
	$res=mysqli_query($db,$query);
	if($res){
	$ev1=mysqli_fetch_assoc($res);
	if($ev1['ev1']){
	
	}
	else
	{
	
	}
}

}










 ?>
 <form action="ev.php" method="POST">
	<button type="submit" name="register1">REGISTER NOW</button>
</form>
 