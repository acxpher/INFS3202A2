<?php
date_default_timezone_set('Etc/UTC');
include "class.phpmailer.php";
include "class.smtp.php";
//include "PHPMailerAutoload.php";

if(isset($_POST["email"])) {

    $email_to = "acxpher@gmail.com";
    $email_subject = "This email for INFS3202 testing \n\n ";
    $semail_subject = "Thank you contacting Marvel!\n\n ";

    function died($error) {
      ?>
      <script>
      alert( "We are very sorry, but there were error(s) found with the form you submitted. These errors appear below.<?php echo $error ?>Please go back and fix these errors.");
      window.location.href = "../contact.php";
        </script>
        <?php
        die();
    }
    // validation expected data exists
    if(!isset($_POST["name"]) ||
      !isset($_POST["email"]) ||
      !isset($_POST["msg"])) {
    died('We are sorry, but there appears to be a problem with the form you submitted.');
 }
    $name = $_POST["name"]; // required
    $email_from   = $_POST["email"]; // required
    $phone        =$_POST["phone"];
    $msg          = $_POST["msg"]; // required
    $error_message= "";
    $email_exp    = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.';

  }
  if(strlen($msg) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.';

  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    $email_message .= "\r\nThis customer needs help.";
    $email_message .= "\r\nName: ".clean_string($name);
    $email_message .= "\r\nEmail: ".clean_string($email_from);
    $email_message .= "\r\nPhone: ".clean_string($phone);
    $email_message .= "\r\nMessage : ".clean_string($msg);
    $semail_message ="Thanks for contacting! \r\n We have revived your e-mail. \r\n we won't reply tho :-D ";

// create email headers
/*
$headers = 'From: '.$email_from."\r\n" .
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
//mail($email_to, $email_subject, $email_message, $headers);
 */

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug=0;
$mail->SMTPAuth=true;
$mail->SMTPKeepAlive = true;
$mail->Mailer = "smtp";
$mail->SMTPSecure="tls";
$mail->Host="smtp.office365.com";
$mail->Port=587;
$mail->Username="g.xu@uqconnect.edu.au";
$mail->Password="0951877qQ";
$mail->IsHTML(true);

$mail->SetFrom("g.xu@uqconnect.edu.au");
$mail->Subject="$email_subject";
$mail->Body="$email_message";
$mail->AddAddress($email_to);
if(!$mail->Send()){
    echo"Mail Error:".$mail->ErrorInfo;
}else{
echo "<p id='endtext'> Message has been sent!</p>";}

 //mail to sender
$smail = new PHPMailer();
$smail->IsSMTP();
$smail->SMTPDebug=0;
$smail->SMTPAuth=true;
$smail->SMTPKeepAlive = true;
$smail->Mailer = "smtp";
$smail->SMTPSecure="tls";
$smail->Host="smtp.office365.com";
$smail->Port=587;
$smail->Username="g.xu@uqconnect.edu.au";
$smail->Password="0951877qQ";
$smail->IsHTML(true);

$smail->SetFrom("g.xu@uqconnect.edu.au");
$smail->Subject="$semail_subject";
$smail->Body="$semail_message";
$smail->AddAddress($email_from);

if(!$smail->Send()){
    echo"Mail Error:".$mail->ErrorInfo;
}else{
  echo'  <script>';
  echo"   alert('Email has been sent!')";
  echo'   </script>';
}
  }
?>
<script>
window.location.href = "../contact.php";
</script>
