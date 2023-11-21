<?php
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
        //Server settings
        // $mail->SMTPDebug = 3;  //Enable verbose debug output
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;  //Enable verbose debug output
        $mail->isSMTP(true);   //Send using SMTP
        $mail->Host       = 'email-smtp.ap-southeast-1.amazonaws.com'; //hostname/domain yang dipergunakan untuk setting smtp
        $mail->SMTPAuth   = true;  //Enable SMTP authentication
        $mail->Username   = 'AKIAUQUCCF6GWV52QPOT'; //SMTP username
        $mail->Password   = 'BBSNjOsafkK/nYDp0H0ce170B05rbYySzpSj7TP/ppkl';   //SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   //Enable implicit TLS encryption
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        if(isset($_POST['formtype'])=="signup"){    
            $honeypot = FALSE;
            if (!empty($_REQUEST['contact_me_by_fax_only']) && $_REQUEST['contact_me_by_fax_only'] == TRUE) {
                $honeypot = TRUE;
                // log_spambot($_REQUEST);
                # treat as spambot
            } else {
                # process as normal   
                $to = "info@spslogistics.io"; // this is your Email address
                $from = $_POST['your-email']; // this is the sender's Email address
                // $first_name = $_POST['first_name'];
                // $last_name = $_POST['last_name'];
                $subject = "Form Sign Up Spslogistics.io";
                $subject2 = "Your Form Sign Up Spslogistics.io";
                // $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
                // $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
                $message = "New Sign Up " .$from;
                $message2 = "Thank you for your sign up.";
                // $headers = "From:" . $from;
                // $headers2 = "From:" . $to;
                // mail($to,$subject,$message,$headers);
                // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                // echo "Mail Sent. Thank you " . $from . ", we will contact you shortly.";
                // header('Location: index.php?message=Signup Success. Thank you ' . $from . ', we will contact you shortly.');
                // You can also use header('Location: thank_you.php'); to redirect to another page.
                // You cannot use header and echo together. It's one or the other.

                //Recipients
                $mail->setFrom($to, $to);
                $mail->addAddress($to, "info spslogistics");    //email tujuan
                // $mail->addReplyTo('info@spslogistics.io', 'Information'); //email tujuan add reply (bila tidak dibutuhkan bisa diberi pagar)
                // $mail->addCC('tan@atech.software'); // email cc (bila tidak dibutuhkan bisa diberi pagar)
                // $mail->addBCC('tan@atech.software'); // email bcc (bila tidak dibutuhkan bisa diberi pagar)
                //Attachments
                #$mail->addAttachment('/var/tmp/file.tar.gz');   //Add attachments
                #$mail->addAttachment('/tmp/image.jpg', 'new.jpg');  //Optional name
                //Content
                $mail->isHTML(true);   //Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    = $message;
                $mail->AltBody = $message;
                $mail->send();

                // $mail->setFrom($to, $to);
                // $mail->addAddress($from, $from);     //email tujuan
                // $mail->isHTML(true);   //Set email format to HTML
                // $mail->Subject = $subject2;
                // $mail->Body    = $message2;
                // $mail->AltBody = $message2;
                // $mail->send();

                // //Recipients
                // $mail->setFrom('info@spslogistics.io', 'Mailer');
                // $mail->addAddress($from, $from);     //email tujuan
                // // $mail->addReplyTo('emailtujuan@domainaddreply.com', 'Information'); //email tujuan add reply (bila tidak dibutuhkan bisa diberi pagar)
                // // $mail->addCC('emailtujuan@domaincc.com'); // email cc (bila tidak dibutuhkan bisa diberi pagar)
                // // $mail->addBCC('emailtujuan@domainbcc.com'); // email bcc (bila tidak dibutuhkan bisa diberi pagar)

                // // Attachments
                // // $mail->addAttachment('/var/tmp/file.tar.gz');   //Add attachments
                // // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');  //Optional name

                // //Content
                // $mail->isHTML(true);   //Set email format to HTML
                // $mail->Subject = 'Here is the subject';
                // $mail->Body    = 'This is the HTML message body <b>in bold! thus</b>';
                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                // $mail->send();
                // echo 'Message has been sent';
                header('Location: ../../index.php?message=Signup Success. Thank you ' . $from . ', we will contact you shortly.');
            }
        } 
    } catch (Exception $e) {
        header('Location: ../../index.php?message=Message could not be sent. Mailer Error: '. $mail->ErrorInfo .'. ');
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>