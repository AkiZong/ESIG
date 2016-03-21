function send_message()
{
	var name = document.getElementById("name").value;
	var email = document.getElementsByName("contact_email")[0].value;
	var company = document.getElementById("company").value;
	var message = document.getElementById("message").value;
	
	if(name == null || name == "" || name.length == 0)
	{
		alert("A Name was not entered!");
		return;
	}
	if(email == null || email == "" || email.length == 0)
	{
		alert("An Email Address was not entered!");
		return;
	}
	if(company == null || company == "" || company.length == 0)
	{
		alert("A Company was not entered!");
		return;
	}
	if(message == null || message == "" || message.length == 0)
	{
		alert("A Message was not entered!");
		return;
	}
	
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			alert(xmlhttp.responseText);
		}
	}
	xmlhttp.open("POST","./External PHP/send_email.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("name="+name+"&email="+email+"&company="+company+"&message="+message);
}