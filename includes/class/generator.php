<?php
    class number {
        public $number1;
        public $number2;
    }
    class Generatequestion {

        public function random_number(int $seed1 = 1, int $seed2 = 1,int $min1 = 1, int $min2 = 1)
        {
            $number = new number();
            $number->number1 = rand($min1, (intval(date('s'))+1)*$seed1);
            $number->number2 = rand($min2, (intval(date('s'))+1)*$seed2);            
            return $number;
        }

        public function plus() {
            $number = $this->random_number(30, 30, 1, 1);
            $data = new number();
            $data->operetor = '+';
            $data->number1 = $number->number1;
            $data->number2 = $number->number2;
            return $data;
        }

        public function minus() {
            $number = $this->random_number(30, 10, 10, 30);
            $data = new number();
            $data->operetor = '-';
            $data->number1 = $number->number1;
            $data->number2 = $number->number2;
            return $data;
        }

        public function multi() {
            $number = $this->random_number(10, 10);
            $data = new number();
            $data->operetor = '*';
            $data->number1 = $number->number1;
            $data->number2 = $number->number2;
            return $data;
        }

        public function div() {
            $number = $this->random_number(100, 1, 100, 1);
            $data = new number();
            $data->operetor = '/';
            $data->number1 = $number->number1;
            $data->number2 = $number->number2;
            return $data;
        }
    }

?>