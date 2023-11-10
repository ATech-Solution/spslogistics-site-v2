<?php
    if(isset($_POST['submit'])){
        //SMTP needs accurate times, and the PHP time zone MUST be set
        //This should be done in your php.ini, but this is how to do it if you don't have   access to that
        date_default_timezone_set('Etc/UTC');

        //Import PHPMailer classes into the global namespace
        //These must be at the top of your script, not inside a function
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        //Load Composer's autoloader
        require 'librarysmtp/autoload.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

            try {
                // //Server settings
                // $mail->SMTPDebug = 3;  //Enable verbose debug output
                // $mail->isSMTP(true);   //Send using SMTP
                // $mail->Host       = 'email-smtp.ap-southeast-1.amazonaws.com'; //hostname/domain yang dipergunakan untuk setting smtp
                // $mail->SMTPAuth   = true;  //Enable SMTP authentication
                // $mail->Username   = 'AKIAUQUCCF6GSJDVC3L5'; //SMTP username
                // $mail->Password   = 'BMFZlACWibjXSlH2MH2Xg80iZVSxNNvt3MqXeCF2d+sx';   //SMTP password
                // // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   //Enable implicit TLS encryption
                // $mail->SMTPSecure = "tls";
                // $mail->Port       = 587;   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;  //Enable verbose debug output
                $mail->isSMTP(true);   //Send using SMTP
                $mail->Host       = 'email-smtp.ap-southeast-1.amazonaws.com'; //hostname/domain yang dipergunakan untuk setting smtp
                $mail->SMTPAuth   = true;  //Enable SMTP authentication
                $mail->Username   = 'AKIAUQUCCF6GSJDVC3L5'; //SMTP username
                $mail->Password   = 'BMFZlACWibjXSlH2MH2Xg80iZVSxNNvt3MqXeCF2d+sx';   //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   //Enable implicit TLS encryption
                $mail->SMTPSecure = "tls";
                $mail->Port       = 587;   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                // //Recipients
                // $mail->setFrom('info@spslogistics.io', 'Info SPS');
                // $mail->addAddress('tan@atech.software', 'tan@atech.software');     //email tujuan
                // $mail->addReplyTo('tan@atech.software', 'Information'); //email tujuan add reply (bila tidak dibutuhkan bisa diberi pagar)
                // $mail->addCC('tan@atech.software'); // email cc (bila tidak dibutuhkan bisa diberi pagar)
                // $mail->addBCC('tan@atech.software'); // email bcc (bila tidak dibutuhkan bisa diberi pagar)

                // //Attachments
                // #$mail->addAttachment('/var/tmp/file.tar.gz');   //Add attachments
                // #$mail->addAttachment('/tmp/image.jpg', 'new.jpg');  //Optional name

                // //Content
                // $mail->isHTML(true);   //Set email format to HTML
                // $mail->Subject = 'Here is the subject';
                // $mail->Body    = 'This is the HTML message body <b>in bold! thus</b>';
                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                // $mail->send();
                // echo 'Message has been sent';

                if(isset($_POST['formtype'])=="signup"){    
                        $to = "info@spslogistics.io"; // this is your Email address
                        $from = $_POST['email']; // this is the sender's Email address
                        // $first_name = $_POST['first_name'];
                        // $last_name = $_POST['last_name'];
                        $subject = "Form Sign Up Spslogistics.io";
                        $subject2 = "Copy of Your Form Sign Up Spslogistics.io";
                        // $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
                        // $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
                        $message = "New Sign Up user";
                        $message2 = "Thank you for your sign up.";
                        $headers = "From:" . $from;
                        $headers2 = "From:" . $to;
                        // mail($to,$subject,$message,$headers);
                        // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                        // echo "Mail Sent. Thank you " . $from . ", we will contact you shortly.";
                        
                        // mail1
                        //Recipients
                        $mail->setFrom($from, $from);
                        $mail->addAddress($to, $to);
                        $mail->addReplyTo('tan@atech.software', 'Information'); 
                        $mail->addCC('tan@atech.software');
                        $mail->addBCC('tan@atech.software');
                        //Content
                        $mail->isHTML(true);   //Set email format to HTML
                        $mail->Subject = $subject;
                        $mail->Body    = $message;
                        $mail->AltBody = $message;
                        $mail->send();

                        // mail2
                        //Recipients
                        $mail2->setFrom($to, $to);
                        $mail2->addAddress($from, $from);
                        $mail2->addReplyTo('tan@atech.software', 'Information'); 
                        $mail2->addCC('tan@atech.software');
                        $mail2->addBCC('tan@atech.software');
                        //Content
                        $mail2->isHTML(true);   //Set email format to HTML
                        $mail2->Subject = $subject2;
                        $mail2->Body    = $message2;
                        $mail2->AltBody = $message2;
                        $mail2->send();
                        header('Location: index.php?message=Signup Success. Thank you ' . $from . ', we will contact you shortly.');
                        
                    }


            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
    }        
?>
<!-- username : AKIAUQUCCF6GSJDVC3L5
password : BMFZlACWibjXSlH2MH2Xg80iZVSxNNvt3MqXeCF2d+sx
SMTP endpoint : email-smtp.ap-southeast-1.amazonaws.com
startTLS Port : 25, 587 or 2587
TLS Wrapper Port : 465 or 2465
TLS : true
sender email: info@spslogistics.io -->