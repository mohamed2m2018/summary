<?php
session_start();
require_once("partials/database.php");
$path=db::select_summary($_SESSION['topic_name']);
echo "<embed src='$path' width='100%' height='100%' alt='pdf' pluginspage='http://www.adobe.com/products/acrobat/readstep2.html'>"

?>



