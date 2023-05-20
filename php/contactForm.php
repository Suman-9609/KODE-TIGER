<?php


$dsn = 'mysql:host=localhost;dbname=kodetiger;charset=utf8';
$username = 'root';
$password = '';

$db = new PDO($dsn, $username, $password);


$Name = $_POST['Name'];
$Whatsapp_no = $_POST['Phone'];
$Email = $_POST['Email'];
$Service = $_POST['Service'];
$Message = $_POST['Message'];

$result = $db->prepare("INSERT INTO contact (name, phone, email, service, message) VALUES (?,?,?,?,?)");
$result->execute([$Name, $Whatsapp_no, $Email, $Service, $Message]);

if($result) {
    $response = "Your data successfully submitted";
    echo $response;
} else {
    $response = "Something went wrong";
    echo $response;
}


?>