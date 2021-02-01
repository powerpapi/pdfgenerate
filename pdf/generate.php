<?php


if($_SERVER['REQUEST_METHOD'] != 'POST'){
	exit;
}

define('ACCESSCHECK', TRUE);


require_once 'vendor/autoload.php';

use Classes\GeneratePDF;

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$inquiry = $_POST['inquiry'];


$data = [

	'name_field' => $fname . '' . $lname,
	'email_field' => $email,
	'phone_field' => $phone,
	'inquiry' => $inquiry
];

$pdf = new GeneratePDF;
$response = $pdf->generate($data);

header('Location: thanks.php?fname='. $fname . '&link=' . $response);




















?>