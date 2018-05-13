<?php
session_start();
require_once("partials/database.php");
db::connect();
$s=$_GET['search'];
echo " $s is great";
if(isset($_GET['search']))
  $_session['keyword']=$_GET['search'];

readfile ('styles/index.html');
?>