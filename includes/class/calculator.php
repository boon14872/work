<?php
    // calculator.php
    class Calculator
    {
        var $a;
        var $b;

        function checkopration($oprator)
        {
            switch($oprator)
            {
                case '+':
                return $this->a + $this->b;
                break;

                case '-':
                return $this->a - $this->b;
                break;

                case '*':
                return $this->a * $this->b;
                break;

                case '/':
                return intval($this->a / $this->b);
                break;

                default:
                return "Sorry No command found";
            }   
        }
        function getresult($a, $b, $c)
        {
            $this->a = $a;
            $this->b = $b;
            return $this->checkopration($c);
        }

    }
?>