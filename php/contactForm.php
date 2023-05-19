<?php
// include('database/kodeTiger.db');
 $con = mysqli_connect("localhost","root","");
 mysqli_select_db($con,'kodetiger');

 $Name = $_POST['name'];
 $Whatsapp_no = $_POST['whatsapp_no'];
 $Email = $_POST['email'];
 $Service = $_POST['services'];
//  $btn = $_GET['add'];
 echo $name;

    // // $q = "insert into contact (name, phone, email, service) values ('$name','$phone','$email','$service ')";
    // $q = "INSERT INTO `contact`(name, phone, email, service) VALUES ('$Name','$Phone','$Email','$Service')";
    // $query = mysqli_query($con,$q);

    // if(isset($query)) {
    //     echo "Your data successfully submitted";
    // } else {
    //     echo "Something went wrong";
    // }

   
 
?>