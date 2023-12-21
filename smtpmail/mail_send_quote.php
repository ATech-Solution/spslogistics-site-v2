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
        // $mail->SMTPDebug = 2;  //Enable verbose debug output
        $mail->isSMTP(true);   //Send using SMTP
        $mail->Host       = 'email-smtp.ap-southeast-1.amazonaws.com'; //hostname/domain yang dipergunakan untuk setting smtp
        $mail->SMTPAuth   = true;  //Enable SMTP authentication
        $mail->Username   = 'AKIAUQUCCF6GWV52QPOT'; //SMTP username
        $mail->Password   = 'BBSNjOsafkK/nYDp0H0ce170B05rbYySzpSj7TP/ppkl';   //SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   //Enable implicit TLS encryption
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        if(isset($_POST['formtype'])=="quote"){
            $honeypot = FALSE;
            if (!empty($_REQUEST['contact_me_by_fax_only']) && $_REQUEST['contact_me_by_fax_only'] == TRUE) {
                $honeypot = TRUE;
                // log_spambot($_REQUEST);
                # treat as spambot
            } else {
                # process as normal
                //$to = "info@spslogistics.io"; // this is your Email address
                $to = "tan@atech.software"; // this is your Email address
                //$from = $_POST['email']; // this is the sender's Email address
                $subject = "Form Shipping Rate Calculator Spslogistics.io";
                //$subject2 = "Your Form Shipping Rate Calculator Spslogistics.io";
                
                $fromCountry ="";
                $toCountry ="";
                $length ="";
                $width ="";
                $height ="";
                $weight ="";
                $whoProduct ="";
                $numberPackage ="";
                $name ="";
                $email ="";
                $waNumber = "";
                $fromCountry = $_POST['from-country'];
                $toCountry = $_POST['to-country'];
                $length = $_POST['length'];
                $width = $_POST['width'];
                $height = $_POST['height'];
                $weight = $_POST['weight'];
                $whoProduct = $_POST['who-product'];
                $numberPackage = $_POST['number-package'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $waNumber = $_POST['wa-number'];
                
                $messages = "From : ". $fromCountry . "<br>To : ". $toCountry . "<br>
                Length : ". $length . "<br>
                Width : ". $width . "<br>
                Height : ". $height . "<br>
                Weight : ". $weight . "<br><br><br>
                <strong>Product Information</strong><br>
                Who product is it? : ". $whoProduct . "<br>
                Number of Package : ". $numberPackage . "<br><br><br>
                <strong>Contact Information</strong><br>
                Name : ". $name . "<br>
                Email : ". $email . "<br>
                Whatsapp Number : ". $waNumber;

                $message2 = "Thank you for your submitted quote, we will contact you shortly.";
                // $headers = "From:" . $from;
                // $headers2 = "From:" . $to;

                // //Recipients
                $mail->setFrom($to, $to);
                $mail->addAddress($to, "info spslogistics");    //email tujuan
                // $mail->addReplyTo('info@spslogistics.io', 'Information'); //email tujuan add reply (bila tidak dibutuhkan bisa 
                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body    = $messages;
                $mail->AltBody = $messages;
                $mail->send();

                // $mail->setFrom($to, $to);
                // $mail->addAddress($from, $name);    //email tujuan
                // $mail->isHTML(true);   //Set email format to HTML
                // $mail->Subject = $subject2;
                // $mail->Body    = $message2;
                // $mail->AltBody = $message2;
                // $mail->send();
                header('Location: ../../shipping-rate-calculator.php?notification=success');
            }
        }   
    } catch (Exception $e) {
        header('Location: ../../shipping-rate-calculator.php?notification=error&message=Mailer Error: '. $mail->ErrorInfo .'. ');
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    } 
?>