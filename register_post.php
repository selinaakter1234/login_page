<?php
//db info
$db_host_name = 'localhost';
$db_user_name = "root";
$db_password = "";
$db_name ="bd2";

//db connection
$db_connect = mysqli_connect($db_host_name, $db_user_name, $db_password, $db_name);

// if($db_connect){
// 	echo "Succesfully Connected";
// }else{
// 	die("Failed to connect");
// }


//information from form
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $email = $_POST['email'];
 $password = $_POST['password'];
// $present_address = $_POST['present_address'];
// $permanent_address = $_POST['permanent_address'];
// $city = $_POST['city'];
// $state = $_POST['state'];
// $zip = $_POST['zip'];

//insert query
$insert_query = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name','$last_name','$email','$password')";
mysqli_query($db_connect, $insert_query);

// if($insert_query){
// 	echo "Sucessfully data inserted";
// }else{
// 	die("Failed to insert");
// }
// //SELECT * FROM `users` 
// mysqli_query($db_connect,$insert_query );



// ?>