<?php
session_start();
if(isset($_SESSION["email"])){
    header("Location:login.php");
}
require_once("signupform.php");
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","dbpt");

function dbconnection(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    // echo mysqli_connect_errno() > 0 ? "Connection Error" : "Connection Success";
    if(mysqli_connect_errno() > 0){
        die("Connection Failed");
    }else{
        return $db;
    }
}

// beautyprint($database);
if(isset($_POST["signup"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $uname = $_POST["username"];
        $email = $_POST["email"];
        $password1 = $_POST["pwd"];
        $password2 = $_POST["con_pwd"];
        $date = $_POST["date"];
        $errors = [];
        if(empty($uname)){
            array_push($errors,"username is required");
        }
        if(empty($email)){
            array_push($errors,"email is required");
        }
        if(empty($password1)){
            array_push($errors,"password1 is required");
        }
        if(empty($password2)){
            array_push($errors,"password2 is required");
        }
        if($password1 !=$password2){
            array_push($errors,"password do not match");
        }

        $database = dbconnection();
        $safepwd = md5(sha1($password1));
        if(count($errors) == 0){
            $query = "INSERT INTO users (username,email,password,created_at) VALUES ('$uname','$email','$safepwd','$date') LIMIT 1";
            mysqli_query($database,$query);
            $_SESSION["email"] = $email;
            echo "<script>window.alert('Username and password are correct.')</script>";
            header("Location:login.php");
        }else{
            echo "<script>window.alert('Username and password are incorrect.')</script>";
        }
     
        
    }
}

function beautyprint($array){
    echo "<pre>".print_r($array,true)."</pre>";
}

?>