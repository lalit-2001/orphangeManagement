
<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php'; 


include "../constant/config.php";
session_start();


if(isset($_POST['forget'])){
	//if email exist
	$sql="SELECT * from care WHERE email=?";
	$stmt= $conn->prepare($sql);
	$stmt->execute([$_POST['email']]);
	$record=$stmt->fetchAll();
	$cnt=count($record);
	// print_r($cnt); exit;
	if($cnt==1){
$pass=rand(100000,10000000);
$pass1=hash('sha256', $pass);//first iteration

 function createSalt()
                {
                    return '2123293dsj2hu2nikhiljdsd';
                }
                $salt = createSalt();
                $password1 = hash('sha256', $salt . $pass1);//2nd iteration

foreach($record as $res){



	$sql="UPDATE data SET password=? WHERE id=?";
	$stmt= $conn->prepare($sql);
	$stmt->execute([$password1, $res['id']]);


$email=$res['email'];

$msg="your new password is= ".$pass." ";
 $smtp_server = 'smtp.hostinger.com';
           $smtp_password = 'info@PHOTO123';
           $smtp_enc = 'tls';
           $smtp_username = 'info@photobill.in';
           $smtp_port = '587';


     $mail = new PHPMailer(true);
        //echo $smtp_port; exit;
         
              $mail->isSMTP();
              $mail->Host       = $smtp_server;
              $mail->SMTPAuth   = true;
              $mail->Username   = $smtp_username;
              $mail->Password   = $smtp_password;
              $mail->SMTPSecure = $smtp_enc;
              $mail->Port       = $smtp_port;

              $mail->setFrom($smtp_username);
              $mail->addAddress($email);
              
              $mail->isHTML(true);

              $mail->Subject = 'Your new password';
              $mail->Body    =  $msg;
              if($mail->send())
                {
                ?>
                        <script type="text/javascript">
                                alert("Thank you.. Your password is sent to your email");
                                window.location = "../../login.php";
                        </script> 
          
                <?php
                }  
                else{ ?>
                	  <script type="text/javascript">
                                alert("Something Went Wrong");
                                window.location = "../../login.php";
                        </script> 
             <?php   }





}





	} else{

echo "email doesn't match";

	}

      
          

}



?>