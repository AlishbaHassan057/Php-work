<?php 
session_start();
include'./config.php';


$name =  $_POST['name'];
$location =  $_POST['location'];
$price =  $_POST['price'];
$type =  $_POST['type'];
$description =  $_POST['desc'];
$fileName =  $_FILES['image']['name'];
$tempName = $_FILES['image']['tmp_name'];
move_uploaded_file($tempName, './images/' . $fileName);
$insert= "INSERT INTO  clothing2(name,location,price,type,description,images) VALUES('{$name}','{$location}',$price,'{$type}','{$description}','{$fileName}')";
mysqli_query($connection,$insert);
$_SESSION['success']='Your Brand Added Successfully!!!';
header("Location: {$hostname}/add-brand.php");
?>