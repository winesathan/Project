<?php
session_start();

require_once("loginform.html");
if(isset($_SESSION["username"])){
    header("Location:private.php");
}

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
$database = dbconnection();
// beautyprint($database);
if(isset($_POST["login"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $uname = $_POST["username"];
        $pwd = $_POST["password"];
        fetchsingledata($uname,$pwd);
    }
}
function beautyprint($array){
    echo "<pre>".print_r($array,true)."</pre>";
}
function fetchsingledata($uname,$pwd){
    $database = dbconnection();
    $safepwd = md5(sha1($pwd));
    $query = "SELECT * FROM users WHERE email='$uname' AND password='$safepwd'";
    // $query = "SELECT * FROM users WHERE id!=$id";
    $result = mysqli_query($database,$query);

    if(mysqli_num_rows($result) > 0){
        foreach($result as $data){
            $a = $data["email"];
            $b = $data["password"];
            if($a == $uname && $b == $safepwd){
                echo "<script>window.alert('Username and password are correct.')</script>";
                $_SESSION["username"]=$uname;
                $_SESSION["password"]=$pwd;
                header("Location:private.php");
            }else{
                    echo "<script>window.alert('Username and password are incorrect.')</script>";
                }
        }
    }
}

?>