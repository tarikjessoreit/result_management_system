<?php 
session_start();
date_default_timezone_set('Asia/Dhaka');

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname  = 'result_ms';

$con = new mysqli($servername,$username,$password,$dbname);


// tables
define('USERTBL', 'members');
define('RESULTTBL', 'results');






 ?>