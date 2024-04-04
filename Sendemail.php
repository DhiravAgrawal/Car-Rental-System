<?php
require 'Project/includes/PHPMailer.php';
require 'Project/includes/Exception.php';
require 'Project/includes/SMTP.php';
#definename spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$con = mysqli_connect('localhost','root','','project');
$Carid=$_GET['CarID'];
$email=$_GET['Email'];
$row="Select * from cardetails where CarID =$Carid" ;
mysqli_query($con,$row);

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth="true";
$mail->Port="425";
$mail->Username="dhirav128@gmail.com";
$mail->Password="madmax@007";
$mail->Subject="Test Email";
$mail->setFrom("dhirav128@gmail.com");
$mail->isHTML(true);
$mail->Body="<h1>Hello User,  Your car has been booked </h1><br> <h2><b> Details </b></h2> <br> <h3> 
Car Name :- ".$row['Carname']."<br> Per day Price :- ".$row['Priceperday'];



$mail->AddAddress($email);
if ($mail->Send())
{
    header("Location:index.php"); 
    echo "Sucess";
}
else 
{echo "error";}
$mail->SMTPClose();
?>