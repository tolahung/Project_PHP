<?php
$mysqli = new mysqli("localhost","root","","web_mysqli");

//Check connection
if($mysqli -> connect_errno){
    echo "failed to connect to Mysql: ". $mysqli ->connect_error;
    exit();
}
?>