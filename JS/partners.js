function enter_email()
{
	var email = document.getElementById("email").value;
	
	if(email == null || email == "" || email.length == 0)
	{
		alert("An Email Address was not entered!");
		return;
	}

	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			alert(xmlhttp.responseText);
		}
	}
	xmlhttp.open("GET","./External PHP/submit_partnership.php?email="+email,true);
	xmlhttp.send();
}