
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$servername = "localhost";
$username = "root";
$password = "";
$db ="ypaymo";
$dbconn = new mysqli($servername, $username, $password, $db);

if($dbconn -> connect_error){
    die("Connection failed: ". $dbconn -> connect_error);
}
//echo 'Database Connected!';
?>