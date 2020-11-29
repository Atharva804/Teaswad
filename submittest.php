<?php
// if(isset($_REQUEST['HTTP_METHOD'] == "POST"))
if ($_SERVER['REQUEST_METHOD']=='POST') {
    print_r($_POST);
	$email = $_POST['email'];
    $phone = $_POST['phone'];
    $name = $_POST['name'];
    
    echo $name." ".$email." ".$phone;
    echo "Values";
   
}
else {
    echo "There was an error!";
}

?>

<!-- <script>
    $("#name, #email, #phone").removeClass("input-error");    

    var errorEmpty = "<?php //echo $errorEmpty; ?>";
    var errorEmail = "<?php //echo $errorEmail; ?>";

    if (errorEmpty == true) {
        $("#name, #email, #phone").addClass("input-error");
    }
    if (errorEmail == true) {
        $("#email").addClass("input-error");
    }
    if (errorEmpty == false && errorEmail == false) {
        $("#name, #email, #phone").val("");        
    }

</script> -->
    
    <!-- Second PHP

		// $ok = true;
		// $message = array();

		// if ( !isset($name) || empty($name) ) {
  //       $ok = false;
  //       $messages[] = 'Name cannot be empty!';
  //   }

  //   if ( !isset($email) || empty($email) ) {
  //       $ok = false;
  //       $messages[] = 'Email cannot be empty!';
  //   }

  //    if ( !isset($phone) || empty($phone) ) {
  //       $ok = false;
  //       $messages[] = 'Phone cannot be empty!';
  //   }
    	
  //   if ($ok) {
  //       if ($name === $name) {
  //           $ok = true;
  //           $messages[] = 'Thank You for Subscribing!';
  //       } else {
  //           $ok = false;
  //           $messages[] = 'Please fill the details!';
  //       }
  //   }

  //   echo json_encode(
  //       array(
  //           'ok' => $ok,
  //           'messages' => $messages
  //       )
  //   );

        //MAIL FUNCTION

		// $to='manasvijain24@gmail.com'; // Receiver Email ID, Replace with your email ID
		// $subject='Form Submission';
		// $message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$email;
		// $headers="From: support@teaswad.com";

		// echo $name." ur email: ".$email." ur phone: " .$phone;

	
		 //  if(mail($to, $subject, $message, $headers)){ 
		 // 	 <script type="text/javascript"> 
		 // 	 alert("Thank You for Subscribing!, success"); 
		 // 	 window.location.href = "index.html"; 
		 // 	 </script>
		 // }
		 // else{
			// echo "Something went wrong!";
		 // }
?> -->