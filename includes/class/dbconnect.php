<?php
    //dbconnect.php
    class Dbconnect
    {
        public function connect()
        {
            $state = "mysql:host=localhost;dbname=questions;charset=UTF8;";
            $db = new PDO($state,'root','');
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $db;
        }
    }
?>