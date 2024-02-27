<?php

function control(){
    $array = $_REQUEST;
    $number = $array['number'];
    if ($number == NULL){
        echo "Please Write a Number";
    }elseif ($number % 3 == 0){
        echo "This number is divided by 3";
    }elseif ($number % 3 != 0){
        echo "This number is not divided by 3";
        echo "<br>";
        while ($number % 3 != 0){
            $number++;
        }if($number % 3 == 0){
            echo $number. " ". "is divided by 3";
        }
    }
}
control();
