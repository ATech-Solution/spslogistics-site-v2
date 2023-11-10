<?php
if(isset($_POST['submit'])){
    $to = "info@spslogistics.io"; // this is your Email address
    $from = $_POST['your-email']; // this is the sender's Email address
    $subject = "Form Contact Spslogistics.io";
    $subject2 = "Copy of Your Form Contact Spslogistics.io";
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
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$messages,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('Location: index.php?message=Submit Contact Success. Thank you ' . $name . ', we will contact you shortly.');
}
?>