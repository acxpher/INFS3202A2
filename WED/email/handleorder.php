<?php
require '../account/checkLoginStatus.php';
require '../account/dbfunction.php';
date_default_timezone_set('Etc/UTC');
include "class.phpmailer.php";
include "class.smtp.php";

/*$con = getDbConnect();


      if (mysqli_connect_errno($con)) {
                   "Failed to connect to MySQL: " . mysqli_connect_error();
               } else {
                   $mysqli_result = mysqli_query($con, "SELECT * FROM cart WHERE email='$basicinfo[0]'");
                 while ($cart= mysqli_fetch_array($mysqli_result)) {
                   $name=$cart["name"];
                   $price=$cart["price"];
                   $quantity=$cart["quantity"];
                   $image=$cart["image"];
                   $buyer=$cart["buyer"];
                 }}
      if(isset($buyer)) {
                       $email_to = $buyer;
                       $email_subject = "we have reveived your order \n\n ";


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

                       $name = $basicinfo[1]; // required
                       $email_from   = $_POST["email"]; // required
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
                       $email_message .= "\r\nWe have received your order";
                       $email_message .= "\r\nName: ".clean_string($name);
                       $email_message .= "\r\nQuantity: ".clean_string($quantity);
                       $email_message .= "\r\nTotal Price: ".clean_string($phone*$quantity);
                       $email_message .= "\r\nMessage : ".clean_string($msg);
                       $email_message ="Thanks for contacting! \r\n We will reply you very soon! ";

                   // create email headers
                   /*
                   $headers = 'From: '.$email_from."\r\n" .
                   'Reply-To: '.$email_from."\r\n" .
                   'X-Mailer: PHP/' . phpversion();
                   //mail($email_to, $email_subject, $email_message, $headers);


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

*/
                       echo'  <script>';
                       echo "alert('Your order has submitted!')";
                       echo'  </script>';

?>
<script>
  window.location.href = "../checkout.php";
</script>
