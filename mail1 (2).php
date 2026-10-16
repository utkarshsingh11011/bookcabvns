<?php 
 if(isset($_POST['submit'])){
     $name=$_POST['name'];
      $type=$_POST['type'];
     $phone=$_POST['phone'];
     $sden=$_POST['s-destination'];
     $eden=$_POST['e-destination'];
     $date=$_POST['date'];
     $time=$_POST['time'];
     
   
    
        $recipient = "info@bookcabvaranasi.com";

        // Set the email subject.
        $subject = "New contact from $name";

        // Build the email content.
        $email_content = "Name: $name \n";
        $email_content .= "Phone No. : $phone \n";
        $email_content .= "Type : $type \n";
        $email_content .= "Start Destination. : $sden \n";
        $email_content .= "End Destination : $eden \n";
        $email_content .= "Date : $date \n";
        $email_content .= "Time : $time \n";
        

        // Build the email headers.
        $email_headers = "From: Website <$name>";
        

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