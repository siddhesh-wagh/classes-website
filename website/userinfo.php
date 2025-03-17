<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}else{
    echo "No Connection";
}

mysqli_select_db($con, 'shreeyaacademycdb');

$user = $_POST['user'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$comment = $_POST['comment'];

$query = " iil, contact, comment) 
values ('$user', '$email', '$connsert into userinfodata (user, ematact', '$comment')";

// echo "$query";
mysqli_query($con, $query);

header('location:index.php');

?>