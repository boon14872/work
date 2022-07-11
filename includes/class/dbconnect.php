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
            $port = getenv('port');
            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::MYSQL_ATTR_SSL_CA => '/path/to/cacert.pem',
                PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
            );
                        $state = "mysql:host=$host;dbname=$dbname;port=$port;";
            $db = new PDO($state,$user,$pass,$options);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $db;
        }
    }
?>
