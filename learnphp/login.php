<?php
// error_reporting(E_ALL);
// ini_set('display_errors', true);
// ini_set('html_errors', false);

$username = $_GET["username"];
$password = $_GET["password"];

$_GET["username"] = "Carlos";
$_GET["password"] = "secret";

if($password == "secret")
{
    echo "Welcome $username!";
}

else if($username != "Carlos" && $password != "secret")
{
    echo "Please enter username and password";
}

else
{
    echo "Access Denied";
}

?>