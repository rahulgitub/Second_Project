<?php
  
  	

  if (isset($_POST['submit'])) {

  			   $Name =$_POST['Name'];
			  $Email =$_POST['Email'];
			  $Phone_Number =$_POST['Phone_Number'];
			  $specialty =$_POST['specialty'];
			  $Location =$_POST['Location'];
			  $Message =  $_POST['Message'];

  			   $to = "crahul@planexsolution.com";

		         $subject = "This is subject";
		         
		         $message = "<b>This is HTML message.</b>";
		         $message .= "<h1>This is headline.</h1>";
		         
		         $header = "From:sharshdeep@planexsolution.com \r\n";
		         $header .= "Cc:crahul@planexsolution.com \r\n";
		         $header .= "MIME-Version: 1.0\r\n";
		         $header .= "Content-type: text/html\r\n";
		         
		         $retval = mail ($to,$subject,$message,$header);
		         
		         if( $retval == true ) {
		            echo "Message sent successfully...";
		         }else {
		            echo "Message could not be sent...";
		         }
		  }


?>