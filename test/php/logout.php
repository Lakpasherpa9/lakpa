<?php

session_start();
$_SESSION=array();
session_destroy();
if(!($_SESSION['name']))
{
header("Location: ../index.php");
}
?>