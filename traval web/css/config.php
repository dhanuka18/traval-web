<?php
$server_name = "localhost";
$user_name ="root";
$password ="";
$database ="login";


$connection = new mysqli($server_name , $user_name , $password , $database);

if($connection -> connect_error){
    die("Connection error");
}else{
    echo 'Connection Successful';

}
?>

