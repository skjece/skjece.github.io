
function vpassword()
{
	var x=document.getElementById("password")
	var status=false;
	if(x.value.length<8)
	  {
	  	alert("password too short");
	  	status=false;
	  }
	  else
	  	status=true;

	  return status;

}

function vusername(str)
{
	//alert("pheww");
	var req= new XMLHttpRequest();
	req.open("get","accounts.php?username="+str,true);
	req.send();
	
	req.onreadystatechange=function()
	{ 
		if(req.readyState==4 && req.status==200)
		{
				document.getElementById("xyz").innerHTML=req.responseText;
		}
	}
}

