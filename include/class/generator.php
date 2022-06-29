<?php
    class generator {
        protected $db;
        public function __construct($dbconn)
        {
            $this->db = $dbconn;
        }

        public function random_number(int $seed = 1)
        {
            $number1 = rand(1, (intval(date('s'))+1)*$seed);
            $number2 = rand(1, (intval(date('s'))+1)*$seed);            
            return $number1,$number2;
        }
    }
?>