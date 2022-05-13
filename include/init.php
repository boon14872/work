<?php
//init.php
    require 'class/dbconnect.php';
    require 'class/user.php';

    session_start();
    $db_obj = new dbconnect();
    $dbconn = $db_obj->connect();
    $user_obj = new user($dbconn);

    //print_r($user_obj);
?>