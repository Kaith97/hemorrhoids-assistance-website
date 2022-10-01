<?php
session_start();
require "vendor/autoload.php";
$robo = 'robot@example.com';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include 'db.php';
$developmentMode = true;
if(isset($_POST['treatment']) && isset($_SESSION['id'])) {
	$id = $_SESSION['id'];
	$sql = mysqli_query($conn, "SELECT * FROM user WHERE id='$id' ");
	$row = mysqli_fetch_assoc($sql);
	if ( mysqli_num_rows($sql) > 0 ) {
		$uID = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
$mailer = new PHPMailer($developmentMode);
try {
$mailer->SMTPDebug = 2;
$mailer->isSMTP();
if ($developmentMode) {
$mailer->SMTPOptions = [
'ssl'=> [
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
]
];
}
$mailer->Host = 'smtp.gmass.co';
$mailer->SMTPAuth = true;
$mailer->Username = 'gmass';
$mailer->Password = 'c179fb15-ab2d-4b16-9209-f1de8bc36cd0';
$mailer->SMTPSecure = 'tls';
$mailer->Port = 587;
$mailer->setFrom('helo99122@gmail.com', 'Sm Sohag');
$mailer->addAddress($email, $name);
$mailer->isHTML(true);
$mailer->Subject = 'Scheduled plan (combination of exercises and diets) confirmed';
$mailer->Body = 'We confirm you receive scheduled plan based on your result ('.$_POST['treatment'].' haemorrhoids) for one week.<br>And we will keep sending you reminder everyday to your email.';
$mailer->send();
$mailer->ClearAllRecipients();
$result = mysqli_query($conn,"SELECT * FROM mail WHERE user_id='$uID'");
			if(mysqli_num_rows($result)>0)
			{
				$sql = mysqli_query($conn,"UPDATE mail SET treatment_plan = '".$_POST['treatment']."',treatment_time = '0',complete = '0' WHERE user_id = '".$uID."'");
			}else{
				$sql = mysqli_query($conn,"INSERT INTO mail (user_id,treatment_plan,treatment_time,complete,created_date,updated_date) VALUES('".$uID."','".$_POST['treatment']."','0','0',now(),now())");
			}
echo "MAIL HAS BEEN SENT SUCCESSFULLY";
} catch (Exception $e) {
echo "EMAIL SENDING FAILED. INFO: " . $mailer->ErrorInfo;
}
}
}