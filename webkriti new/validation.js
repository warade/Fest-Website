	function email()
	{
		var mail=document.getElementById("emailaddress");
		if(mail.value.length==0)
		{
			label("*","eprompt","red");
			return false;

		} 
		if(!mail.match(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/))
		{ 
			label("Invalid","eprompt","red");
			return false;
		}
		label(" ","eprompt","white");
		return true;
	}
	function label(message,id,color)
	{
		document.getElementById(id).innerHTML=message;
		document.getElementById(id).style.color=color;
	}
