<?php 
 if(isset($_POST['submit'])){
     $name=$_POST['name'];
      $pass=$_POST['email'];
     $from=$_POST['phone'];
     $to=$_POST['msg'];
   
    
        $recipient = "info@bookcabvaranasi.com";

        // Set the email subject.
        $subject = "New contact from $name";

        // Build the email content.
        $email_content = "Name: $name \n";
        $email_content .= "E-mail: $pass\n";
    
        
      
        $email_content .= "Phone No.: $from \n";
        $email_content .= "Message: $to \n";
        

        // Build the email headers.
        $email_headers = "From: Website <$email>";
        

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
           header("location:thankyou.php");
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

  

 }
 
 
 ?>