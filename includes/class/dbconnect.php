<?php
    //dbconnect.php
    class Dbconnect
    {
        public function connect()
        {
            $host = getenv('dbhost');
            $user = getenv('dbuser');
            $pass = getenv('dbpass');
            $dbname = getenv('dbname');
            $charset = 'utf8';
            $state = "mysql:host=".$host.";dbname=".$dbname.";charset=".$charset.";";
            $db = new PDO($state,$user,$pass);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $db;
        }
    }
?>
