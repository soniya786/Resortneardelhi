<?php
// smtp code for email
$mailString = "Enquiry By ".$_POST["Name"]."\n".$_POST["Email"]."\n".$_POST["Phone"]."\n".$_POST["Message"];

$to = "shaziltabrejkhan2019@gmail.com";
$subject = "Contact by ".$_POST["name_enq"];
$txt = $mailString; 
$headers = "From: noreply@24x7-customer-service.online" . "\r\n" .
"CC: shaziltabrejkhan2019@gmail.com";

mail($to,$subject,$txt,$headers);
//smtp code for email
?>

Hii, Testing