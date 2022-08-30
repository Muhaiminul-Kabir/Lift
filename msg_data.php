<?php
session_start();
require_once 'class.php';
include 'connection.php';

$msg = array();

$msg1 = array();






//variables


$email = 'q@gmail.com';
//sql

$sqlx = "SELECT * FROM feedback where reply = ''";
$sqlx1 = "SELECT * FROM feedback where user_email = '".$email."'";



//rsult fetch
$resultx = mysqli_query($link, $sqlx);

$resultx1 = mysqli_query($link, $sqlx1);

//noofdata

$noOfDatax = mysqli_num_rows($resultx);

$noOfDatax1 = mysqli_num_rows($resultx1);








$i = 0;

$k = 0;



while ($row = mysqli_fetch_array($resultx)) {
        
        $msg[$i] = new ms();
        $msg[$i]->id = $row['id'];
        $msg[$i]->subject = $row['subject'];
        $msg[$i]->user_email = $row['user_email'];
        $msg[$i]->text = $row['text'];
        $msg[$i]->ans = $row['reply'];
       

        $i++;
}


while ($row = mysqli_fetch_array($resultx1)) {
        
        $msg1[$k] = new ms();
        $msg1[$k]->id = $row['id'];
        $msg1[$k]->subject = $row['subject'];
        $msg1[$k]->user_email = $row['user_email'];
        $msg1[$k]->text = $row['text'];
        $msg1[$k]->ans = $row['reply'];
       

        $k++;
}
