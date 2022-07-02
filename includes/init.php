<?php
    //init.php
    require 'class/dbconnect.php';
    require 'class/user.php';
    require 'class/generator.php';
    require 'class/calculator.php';
    require 'class/questions.php';

    session_start();
    $db_obj = new Dbconnect();
    $dbconn = $db_obj->connect();
    $user_obj = new User($dbconn);
    $gen_obj = new Generatequestion();
    $cal_obj = new Calculator();
    $questionregis_obj = new QuestionsRegis($dbconn);
?>