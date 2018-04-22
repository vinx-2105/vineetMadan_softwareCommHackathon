<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "vnt.madan";
 $dbpass = "12345678";
 $db = "newsy";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>