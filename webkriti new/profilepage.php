<?php 
require 'coreinc.php';
$db=mysqli_connect("localhost","root","","usrinfo");
$i=$_SESSION['id'];
$query="SELECT ev1 FROM users WHERE id='$i'";
$res=mysqli_query($db,$query);
if($res){
	$ev1=mysqli_fetch_assoc($res);
	if($ev1['ev1'])
	{

	}
}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <a href="festhome.php">home</a>
<a href="event.php">Events</a>
<a href="contact.php">contact</a>
<a href="about.php">about us</a>

<br><br>		



 <form action="logout.php" meathod="POST">
 	<button type="submit">
 		logout
 	</button>
 </form>	
 </body>
 </html>