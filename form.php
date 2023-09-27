<?php
include "./db.php";

if(isset($_POST['submit'])){
    $first = $_POST['fname'];
    echo $first."<br>";
    $email = $_POST['email'];
    echo $email."<br>";
    $phonenumber=$_POST['phonenumber'];
    echo $phonenumber."<br>";
    $address=$_POST['address'];
    echo $address."<br>";
    $city=$_POST['city'];
    echo $city."<br>";
    $region=$_POST['region'];
    echo $region."<br>";
    $pinno=$_POST['pinno'];
    echo $pinno."<br>";
    $feedback=$_POST['feedback'];
    echo $feedback."<br>";
    $rating=$_POST['rating'];
    echo $rating."<br>";
}
?>
