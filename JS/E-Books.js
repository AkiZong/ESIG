function enter_email(newsletter_email)
{
	if(newsletter_email == null)
	{
		var email = document.getElementById("email").value;
	}
	alert("Email: "+newsletter_email);
	if(email == null || email == "" || email.length == 0)
	{
		return false;
	}

	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			if(xmlhttp.responseText == 'Thank you for submitting your email!')
			{
				return true;
			}
		}
	}
	xmlhttp.open("GET","./External PHP/submit_email.php?email="+email,true);
	xmlhttp.send();
	
	return false;
}

function enter_white_paper()
{
	var username = document.getElementById("form-email").value;
	if (username != "" && username != null) 
	{
		if (document.getElementById("form-newsletter").checked)
		{
			if(enter_email(username) == false)
			{
				return false;
			}
		}
			var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					if(xmlhttp.responseText == 1)
					{
						setCookie("esig_name", username, 365);
						lightbox_close();
						return true;
					}
					else if(xmlhttp.responseText == 2)
					{
						document.getElementById("error").innerHTML = "The email entered does not exist!";
					}
					else {
						document.getElementById("error").innerHTML = "Invalid Email Address!";
					}
				}
			}
			xmlhttp.open("GET","./External PHP/download_file.php?email="+username,true);
			xmlhttp.send();

		}
		else {
			document.getElementById("error").innerHTML = "No email was entered!";
		}
		return false;
}

function download_file()
{
	if(checkCookie() == true)
	{
		return true;
	}
	else {
		lightbox_open();
	}
	return false;
}

function getCookie(cname) {
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1);
		if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
	}
	return "";
}

function checkCookie() 
{
	var username=getCookie("esig_name");
	if (username!="") {
		return true;
	}else{
		return false;
	}
} 

function setCookie(cname, cvalue, exdays) 
{
	var d = new Date();
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
	var expires = "expires="+d.toUTCString();
	document.cookie = cname + "=" + cvalue + "; " + expires;
} 

function lightbox_open()
{
	$("body").css("overflow", "hidden");
	$("#mainNav").css("display", "none");
	document.getElementById('light').style.display='block';
	document.getElementById('fade').style.display='block';  
}

function lightbox_close(){
	$("body").css("overflow", "auto");
	$("#mainNav").css("display", "block");
	document.getElementById('light').style.display='none';
	document.getElementById('fade').style.display='none';
}