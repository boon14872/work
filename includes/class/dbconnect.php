<?php
    //dbconnect.php
    class Dbconnect
    {
        public function connect()
        {
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $dbname = 'mygame';
            $charset = 'utf8';
            $state = "mysql:host=".$host.";dbname=".$dbname.";charset=".$charset.";";
            $db = new PDO($state,$user,$pass);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $db;
        }
    }
?>