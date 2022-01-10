<?php
$conn = mysqli_connect('localhost','root','','project');
    
if(!$conn)
{
    echo "Failed to connect to Mysql : ".mysqli_connect_error();
}
else
{
    echo "connected";
}

?>