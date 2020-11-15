<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];		

		$to='manasvijain24@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Contact No.:".$contact."\n"."Email :"."\n\n".$email;
		$headers="From: support@teaswad.com";

		if(mail($to, $subject, $message, $headers)){
			header("Location: http://swadtesting.atwebpages.com/");
		}
		else{
			echo "Something went wrong!";
		}
	}
?>