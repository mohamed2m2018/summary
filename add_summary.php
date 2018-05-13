<?php
session_start();
require_once("partials/database.php");
db::connect();

if(isset($_POST['submit']))
{
    if(empty($_POST['topic_name']))
        {
        echo "please provide a name for the topic";
        }
    else
       echo "'{$_POST['topic_name']}'";
   
    $name=$_FILES['file']['name']; //the name of the file
    $tmp_name=$_FILES['file']['tmp_name'];//the temperory name it has now
    if(isset($name))
    {
        if(!empty($name)) 
        {
            $location="summaries/";
            if (!empty($_POST['topic_name']))
            {
                if(move_uploaded_file($tmp_name,$location.$name)) //its temporary name and its required destination +the name it will have 
                {   db::insert_summary($location.$name,$_POST['topic_name']);
                    $_SESSION['topic_name'] = $_POST['topic_name'];
                    echo " is uploaded successefully";
                    echo "<br> to visit it <a href='view_summary.php' >click here</a>"; 
                }
                else{
                    echo "unfortunately something went wrong,please try again..";
                    }
            }
        }
        else
        {
        echo " No file is uploaded";
        }
    }
}
readfile("styles/add_summary.html");

?>