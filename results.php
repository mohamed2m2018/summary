<?php 
session_start();
require_once("partials/database.php");
db::connect();
print_r($_GET['search']);
if (isset($_GET['search']))
 db::search_for_summary($_GET['search']);
?>