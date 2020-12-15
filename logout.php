<?php
session_start();
session_destroy();
require_once("private.php");

header("Location:Homepageforproject.php");

?>