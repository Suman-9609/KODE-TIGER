<?php
// include('database/kodeTiger.db');

/*
$con = mysqli_connect("localhost", "root");
mysqli_select_db($con, 'kodetiger');

$Name = $_POST['Name'];
$Whatsapp_no = $_POST['Phone'];
$Email = $_POST['Email'];
$Service = $_POST['Service'];
// $Message = $_POST['Message'];


// $response = array('message' => 'Data received successfully');
// echo json_encode($response);

echo $Name . "&nbsp;&nbsp";


// // $q = "insert into contact (name, phone, email, service) values ('$name','$phone','$email','$service ')";
$q = "INSERT INTO `contact` (name, phone, email, service) VALUES ('$Name','$Whatsapp_no','$Email','$Service')";
$query = mysqli_query($con, $q);

if (isset($query)) {
    $response = "Your data successfully submitted";
    echo $response;
} else {
    $response = "Something went wrong";
    echo $response;
}
*/


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