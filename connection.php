<?php


function Connect()
{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "contact_form";

 // Create connection
 $conn = new mysqli("localhost","root","","contact_form") or die($conn->connect_error);

 return $conn;
}
 
?>