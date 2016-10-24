<?php

$username = "Jack";
$password = "password";


if($username == "Jack" && $password == "password")
{
    setcookie('access_level','standarduser');
    setcookie('name','Jack');
}

header("Location: homepage.php");

?>
