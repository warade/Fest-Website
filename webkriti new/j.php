<script type="text/javascript">
function next()
{
	var x=document.getElementById("username");
	 var y="<?php ex(); ?>";
	 if(y){
	 	document.getElementById("submit").type="submit";
	 	return true;

	 }
	 if(!y){
	 	document.getElementById("submit").type="button";
	 	return false;

	 }

}
</script>
<?php 
	function ex()
	{
		$u="<script> document.write(x);</script>";
		$db=mysqli_connect("localhost","root","","usrinfo");
		if(isset($u)&&!empty($u))
		{
			$query="SELECT id FROM users WHERE username='$u'";
			$res=mysqli_query($db,$query);
			if($res)
			{
				if(mysqli_num_rows($res))
					{
						$id=mysqli_fetch_assoc($res);
					     $z=1;
					}
			}
			else
				$z=0;
		}
		else
			$z=0;
		echo $z;
	}










 ?>
