<?php

$host = "localhost";
$user = "root";
$pwd = "";
$db = "taskapp";


$con= new mysqli ($host, $user, $pwd, $db);

if(!$con = new mysqli($host,$user,$pwd,$db))
{

	die("failed to connect!");
}
