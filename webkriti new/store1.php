<?php
$db=mysqli_connect("localhost","root","","usrinfo");

$d=$_POST['dob'];
$n=$_POST['name'];
$c=$_POST['city'];
$e=$_POST['email'];
$u=$_POST['username'];
$p=$_POST['password'];
$s=$_POST['sex'];



$query="INSERT INTO users (name,sex,dob,city,email,username,password) VALUES ('$n','$s','$d','$c','$e','$u','$p')";
$res=mysqli_query($db,$query);

if($res&&!empty($u)&&!empty($p))
{
ob_start();
session_start();
$query="SELECT id FROM users WHERE username='$u' AND password='$p'";
$res=mysqli_query($db,$query);
if($res)
{
	if(mysqli_num_rows($res))
	{

    	$id=mysqli_fetch_assoc($res);
     	$_SESSION['id']=$id['id'];
	}
header("Location: index.php");
}
}
else
header("Location: anew.html");
$i=mysqli_insert_id($db);
if($i==0)
	echo "<script> window.location.href='/anew.html'</script>";
 ?>


