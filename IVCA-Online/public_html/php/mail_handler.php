<?php 
if(isset($_POST['submit'])){
    $to = "ivca@ansleyhall.co.uk, veterancykel@gmail.com, alain.cuvier@orange.fr"; // this is your Email address
    $from = $_POST['senderemail']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "IVCA Membership application";
    $subject2 = "Copy of your form submission";
    $address = $_POST['address'];
    $postcode = $_POST['postcode'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $interest = $_POST['interest'];

    $message = $name . "\n\n" . $address . "\n\n" . $postcode . "\n\n" . $city . "\n\n" . $country . "\n\n" . $interest;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;

// send the message to IVCA
    $message = $name . " wrote the following:" . "\n\n" . $message;
  mail($to,$subject,$message,$headers);
  
// send a seperate email to the applicant
  $message2 = "Here is a copy of your message " . $name . "\n\n" . $message;

    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
header('Location: thank_you.php'); // redirect to thank you page
// echo "Mail Sent. Thank you " . $name . ", we will be in touch!";

    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>