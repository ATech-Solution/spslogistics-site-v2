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
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;  //Enable verbose debug output
                $mail->isSMTP(true);   //Send using SMTP
                $mail->Host       = 'ssl://email-smtp.ap-southeast-1.amazonaws.com'; //hostname/domain yang dipergunakan untuk setting smtp
                // $mail->Host       = 'ssl://email-smtp.us-west-2.amazonaws.com';
                $mail->SMTPAuth   = true;  //Enable SMTP authentication
                $mail->Username   = 'AKIAUQUCCF6GSJDVC3L5'; //SMTP username
                $mail->Password   = 'BMFZlACWibjXSlH2MH2Xg80iZVSxNNvt3MqXeCF2d+sx';   //SMTP password
                // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   //Enable implicit TLS encryption
                $mail->SMTPSecure = "tls";
                $mail->Port       = 587;   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('info@spslogistics.io', 'Info SPS');
                $mail->addAddress('tan@atech.software', 'tan@atech.software');     //email tujuan
                $mail->addReplyTo('tan@atech.software', 'Information'); //email tujuan add reply (bila tidak dibutuhkan bisa diberi pagar)
                $mail->addCC('tan@atech.software'); // email cc (bila tidak dibutuhkan bisa diberi pagar)
                $mail->addBCC('tan@atech.software'); // email bcc (bila tidak dibutuhkan bisa diberi pagar)

                //Attachments
                #$mail->addAttachment('/var/tmp/file.tar.gz');   //Add attachments
                #$mail->addAttachment('/tmp/image.jpg', 'new.jpg');  //Optional name

                //Content
                $mail->isHTML(true);   //Set email format to HTML
                $mail->Subject = 'Here is the subject';
                $mail->Body    = 'This is the HTML message body <b>in bold! thus</b>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
?>
<!-- username : AKIAUQUCCF6GSJDVC3L5
password : BMFZlACWibjXSlH2MH2Xg80iZVSxNNvt3MqXeCF2d+sx
SMTP endpoint : email-smtp.ap-southeast-1.amazonaws.com
startTLS Port : 25, 587 or 2587
TLS Wrapper Port : 465 or 2465
TLS : true
sender email: info@spslogistics.io -->