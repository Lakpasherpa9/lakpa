<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "project";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn)
{

	die("failed to connect!");	
}
