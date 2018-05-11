<?php
class db{

//connection to data base

public static function connect ()
 {

$connect=mysqli_connect('localhost','root','') or die("couldn't connect to database");
mysqli_select_db($connect,'summary')or die("couldn't connect to db" );
return $connect;
 }

public static function insert_summary($summary,$topic_name)
 {
    $date = date('Y-m-d H:i:s', time());
    $connect=self::connect(); //self because we have a static function
    $query="INSERT INTO summary (`id`,`author`,`date`,`content`,`name`) VALUES ('NULL','NULL','$date','$summary','$topic_name')";

    if(!mysqli_query($connect,$query))

        echo "An error occured please try again !";


 }

public static function select_summary(){


 }



}//end of class
?>