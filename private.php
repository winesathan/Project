<?php
require_once("private.html");
session_start();
session_destroy();


if(isset($_POST["logout"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        header("Location:Homepageforproject.php");

    }
}





?>