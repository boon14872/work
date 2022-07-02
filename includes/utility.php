<?php
    // utility.php
    include('init.php');
    function createchoice($answer,int $num_of_ch = 3) {
        $choice = [$answer];
        for ($i = 0; $i < $num_of_ch; $i++) {
            $num = $number = rand(10, 100);
            rand(0,1) ? array_push($choice, $answer+$num) : array_push($choice, $answer-$num);
        }
        shuffle($choice);
        return $choice;
    }
    function question(string $operator,object $obj, object $cal, int $count = 10) {
        $data = array();
        if ($operator == "plus") {
            for ($i=0; $i < $count; $i++) { 
                $quest = $obj->plus();
                $quest->id = $i;
                $quest->answer = $cal->getresult($quest->number1, $quest->number2, $quest->operator);
                $quest->choice = createchoice($quest->answer);
                array_push($data, $quest);
            }
        }
        else if ($operator == "plus") {
            for ($i=0; $i < $count; $i++) { 
                $quest = $obj->plus();
                $quest->id = $i;
                array_push($data, $quest);
            }
        }
        else if ($operator == "minus") {
            for ($i=0; $i < $count; $i++) { 
                $quest = $obj->minus();
                $quest->id = $i;
                $quest->answer = $cal->getresult($quest->number1, $quest->number2, $quest->operator);
                $quest->choice = createchoice($quest->answer);
                array_push($data, $quest);
            }
        }
        else if ($operator == "mul") {
            for ($i=0; $i < $count; $i++) { 
                $quest = $obj->multi();
                $quest->id = $i;
                $quest->answer = $cal->getresult($quest->number1, $quest->number2, $quest->operator);
                $quest->choice = createchoice($quest->answer);
                array_push($data, $quest);
            }
        }
        else if ($operator == "div") {
            for ($i=0; $i < $count; $i++) { 
                $quest = $obj->div();
                $quest->id = $i;
                $quest->answer = $cal->getresult($quest->number1, $quest->number2, $quest->operator);
                $quest->choice = createchoice($quest->answer);
                array_push($data, $quest);
            }
        }
        else if ($operator == "basic") {
            for ($i=0; $i < $count; $i++) {
                $ran = rand(1,2);
                if ($ran == 1) {
                    $quest = $obj->plus();
                    $quest->id = $i;
                }
                else if ($ran == 2) {
                    $quest = $obj->minus();
                    $quest->id = $i;
                }
                $quest->answer = $cal->getresult($quest->number1, $quest->number2, $quest->operator);
                $quest->choice = createchoice($quest->answer);
                array_push($data, $quest);
            }
        }
        else if ($operator == "advanced") {
            for ($i=0; $i < $count; $i++) { 
                $ran = rand(1,2);
                if ($ran == 1) {
                    $quest = $obj->multi();
                    $quest->id = $i;
                }
                else if ($ran == 2) {
                    $quest = $obj->div();
                    $quest->id = $i;
                } 
                $quest->answer = $cal->getresult($quest->number1, $quest->number2, $quest->operator);
                $quest->choice = createchoice($quest->answer);
                array_push($data, $quest);
            }
        }
        else if ($operator == "all") {
            for ($i=0; $i < $count; $i++) { 
                $ran = rand(1,4);
                if ($ran == 1) {
                    $quest = $obj->plus();
                    $quest->id = $i;
                }
                else if ($ran == 2) {
                    $quest = $obj->minus();
                    $quest->id = $i;
                }
                else if ($ran == 3) {
                    $quest = $obj->multi();
                    $quest->id = $i;
                }
                else if ($ran == 4) {
                    $quest = $obj->div();
                    $quest->id = $i;
                }
                $quest->answer = $cal->getresult($quest->number1, $quest->number2, $quest->operator);
                $quest->choice = createchoice($quest->answer);
                array_push($data, $quest);
            }
        }
        else {
            return false;
        }
        return $data;
    }
    

?>