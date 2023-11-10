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
                // $mail->Host       = 'ssl://email-smtp.us-west-2.amazonaws.com';
                $mail->SMTPAuth   = true;  //Enable SMTP authentication
                $mail->Username   = 'AKIAUQUCCF6GSJDVC3L5'; //SMTP username
                $mail->Password   = 'BMFZlACWibjXSlH2MH2Xg80iZVSxNNvt3MqXeCF2d+sx';   //SMTP password
                // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   //Enable implicit TLS encryption
                $mail->SMTPSecure = "tls";
                $mail->Port       = 587;   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                if(isset($_POST['formtype'])=="contact"){
                        $to = "info@spslogistics.io"; // this is your Email address
                        $from = $_POST['your-email']; // this is the sender's Email address
                        $subject = "Form Contact Spslogistics.io";
                        $subject2 = "Your Form Contact Spslogistics.io";
                        $name ="";
                        $email ="";
                        $number ="";
                        $company ="";
                        $interest ="";
                        $message ="";
                        $interests = "";
                        if (isset($_POST['your-name'])) {
                            $name = $_POST['your-name'];
                        }else if (isset($_POST['your-email'])) {
                            $email = $_POST['your-email'];
                        }else if (isset($_POST['your-number'])) {
                            $number = $_POST['your-number'];
                        }else if (isset($_POST['your-company'])) {
                            $company = $_POST['your-company'];
                        }else if (isset($_POST['interested'])) {
                            $interest = $_POST['interested'];
                            if (isset($_POST['interested'])) {
                                foreach ($interest as $interested){ 
                                    $interests .= $interested .",";
                                }
                            }
                        }else if (isset($_POST['your-name'])) {
                            $message = $_POST['your-message'];
                        }
                        $messages = "Name : ". $name . "<br>Email : ". $email . "<br>Phone Number : ". $number . "<br>Company : ". $company . "<br>Interest : ". $interests . "<br>message ". $message;
                        $message2 = "Thank you for your contact, we will contact you shortly.";
                        // $headers = "From:" . $from;
                        // $headers2 = "From:" . $to;

                        //Recipients
                        $mail->setFrom('info@spslogistics.io', 'Info SPS');
                        $mail->addAddress($from, "Your email");     //email tujuan
                        $mail->addReplyTo('info@spslogistics.io', 'Information'); //email tujuan add reply (bila tidak dibutuhkan bisa 
                        $mail->isHTML(true);
                        $mail->Subject = $subject;
                        $mail->Body    = $messages;
                        $mail->AltBody = $messages;
                        $mail->send();

                        $mail->setFrom('info@spslogistics.io', 'Info SPS');
                        $mail->addAddress($from, "Your email");     //email tujuan
                        $mail->isHTML(true);   //Set email format to HTML
                        $mail->Subject = $subject2;
                        $mail->Body    = $message2;
                        $mail->AltBody = $message2;
                        $mail->send();
                        header('Location: ../../index.php?message=Submit Contact Success. Thank you ' . $name . ', we will contact you shortly.');
                    }   

            } catch (Exception $e) {
                header('Location: ../../index.php?message=Message could not be sent. Mailer Error: '. $mail->ErrorInfo .'. ');
                // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
?>