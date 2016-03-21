<?php
	
	if(!isset($_POST['email']) || $_POST['email'] == "")
	{
		echo "An email was not entered!";
		return false;
	}

		$to = "goaliesupreme@hotmail.com";
		$email = $_POST['email'];
		$subject = "Resume";
		$filename = $_FILES['file']['name'];
		$size = $_FILES['file']['size'];
		$mime = $_FILES['file']['type'];
		$tmp = $_FILES['file']['tmp_name'];
		$mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

		$file = fopen($tmp,'rb');
							// Now read the file content into a variable
							$data = fread($file,filesize($tmp));
							// close the file
							fclose($file);
							// Now we need to encode it and split it into acceptable length lines
							$data = chunk_split(base64_encode($data));

				// Now we'll build the message headers
						$headers = "From: $email\r\n" .
						"MIME-Version: 1.0\r\n" .
						"Content-Type: multipart/mixed;\r\n" .
						" boundary=\"{$mime_boundary}\"";
						// Now we'll insert a boundary to indicate we're starting the attachment we have to specify the content type, file name, and disposition as an attachment, then add the file content and set another boundary to indicate that the end of the file has been reached
						$message = "--{$mime_boundary}\n" .
						"Content-Type: {$mime};\n" .
						" name=\"{$filename}\"\n" .
						//"Content-Disposition: attachment;\n" .
						//" filename=\"{$fileatt_name}\"\n" .
						"Content-Transfer-Encoding: base64\n\n" .
						$data . "\n\n" .
						"--{$mime_boundary}--\n"; 
						mail($to,$subject,$message,$headers);
						echo 'Mail Sent!';