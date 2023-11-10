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
                $mail->SMTPDebug = 1;  //Enable verbose debug output
                $mail->isSMTP(true);   //Send using SMTP
                $mail->Host       = 'email-smtp.ap-southeast-1.amazonaws.com'; //hostname/domain yang dipergunakan untuk setting smtp
                // $mail->Host       = 'ssl://email-smtp.us-west-2.amazonaws.com';
                $mail->SMTPAuth   = true;  //Enable SMTP authentication
                $mail->Username   = 'AKIAUQUCCF6GSJDVC3L5'; //SMTP username
                $mail->Password   = 'BMFZlACWibjXSlH2MH2Xg80iZVSxNNvt3MqXeCF2d+sx';   //SMTP password
                // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   //Enable implicit TLS encryption
                $mail->SMTPSecure = "tls";
                $mail->Port       = 587;   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                if(isset($_POST['formtype'])=="signup"){    
                    $to = "info@spslogistics.io"; // this is your Email address
                    $from = $_POST['email']; // this is the sender's Email address
                    // $first_name = $_POST['first_name'];
                    // $last_name = $_POST['last_name'];
                    $subject = "Form Sign Up Spslogistics.io";
                    $subject2 = "Your Form Sign Up Spslogistics.io";
                    // $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
                    // $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
                    $message = "New Sign Up user";
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
                    $mail->setFrom('info@spslogistics.io', 'Info SPS');
                    $mail->addAddress($from, $from);     //email tujuan
                    // $mail->addReplyTo('tan@atech.software', 'Information'); //email tujuan add reply (bila tidak dibutuhkan bisa diberi pagar)
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

                    $mail->setFrom('info@spslogistics.io', 'Info SPS');
                    $mail->addAddress($from, $from);     //email tujuan
                    $mail->isHTML(true);   //Set email format to HTML
                    $mail->Subject = $subject2;
                    $mail->Body    = $message2;
                    $mail->AltBody = $message2;
                    $mail->send();
                    header('Location: ../../index.php?message=Signup Success. Thank you ' . $from . ', we will contact you shortly.');
                    // echo 'Message has been sent';

                } else if(isset($_POST['formtype'])=="contact"){
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
                        $mail->addAddress($email, $email);
                        $mail->isHTML(true);
                        $mail->Subject = $subject;
                        $mail->Body    = $messages;
                        $mail->AltBody = $messages;
                        $mail->send();

                        $mail->setFrom('info@spslogistics.io', 'Info SPS');
                        $mail->addAddress($from, $from);     //email tujuan
                        $mail->isHTML(true);   //Set email format to HTML
                        $mail->Subject = $subject2;
                        $mail->Body    = $message2;
                        $mail->AltBody = $message2;
                        $mail->send();
                        header('Location: ../../index.php?message=Submit Contact Success. Thank you ' . $name . ', we will contact you shortly.');
                        // echo 'Message has been sent';
                    }   

            } catch (Exception $e) {
                header('Location: ../../index.php?message=Message could not be sent. Mailer Error: '. $mail->ErrorInfo .'. ');
                // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
?>
<!-- username : AKIAUQUCCF6GSJDVC3L5
password : BMFZlACWibjXSlH2MH2Xg80iZVSxNNvt3MqXeCF2d+sx
SMTP endpoint : email-smtp.ap-southeast-1.amazonaws.com
startTLS Port : 25, 587 or 2587
TLS Wrapper Port : 465 or 2465
TLS : true
sender email: info@spslogistics.io -->