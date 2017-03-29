
function next()
{
	alert("assd");
	var x=document.getElementById("username");
	 var y='<?php 
	{
		$u="<script> document.write(x.value);</script>";
		$db=mysqli_connect("localhost","root","","usrinfo");
		if(isset($u)&&!empty($u))
		{
			$query="SELECT id FROM users WHERE username='.$u.'";
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

 ?>';
	 if(y){
	 	document.getElementById("submit").value="submit";
	 	return true;

	 }
	 if(!y){
	 	document.getElementById("submit").value="button";
	 	return false;

	 }

}

