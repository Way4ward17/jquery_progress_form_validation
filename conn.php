<?php
$db_host='localhost';
$db_username='root';
$db_password='';
$db_name='bank';

 $conn = mysqli_connect($db_host,$db_username,$db_password,$db_name) //connection
 or die('Error Connecting to Database.');
?>