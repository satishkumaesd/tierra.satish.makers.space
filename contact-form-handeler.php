<?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];

        $email_from = "satish.musirana@gmail.com";
        $email_subject = "From Website Submission";
        $email_body = "User Name: $name.\n".
                        "User Email: $email\n".
                        "User Subject: $subject\n".
                        "User Message: $message\n".
            
            $to="contact@makersspace.co";
            $headers = "Form: $email_from \r\n";
            $headers. = "Reply_To: $email \r\n";
            mail($to,$email_subject,$email_body,$headers);
            header("Location: contact.html");

?>
            