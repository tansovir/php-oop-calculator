<?php 
    class Calculator{
        function sum($a, $b){
            $sum = $a+$b;
            return $sum;
        }
        function sub($a, $b){
            $sum = $a-$b;
            return $sum;
        }
        function mul($a, $b){
            $sum = $a*$b;
            return $sum;
        }
        function div($a, $b){
            if($b>0 || $b<0){
                $sum = $a/$b;
                return $sum;
            }
        }
        function getfirstValue(){
            if(isset($_POST['submit'])){
                return $firstValue = $_POST['firstvalue'];
            }
        }
        function getsecondValue(){
            if(isset($_POST['submit'])){
                return $secondValue = $_POST['secondvalue'];
            }
        }
        function errorfirstValue(){
            if(isset($_POST['submit'])){
                $firstValue = $_POST['firstvalue'];
              if(empty($firstValue)){
                echo 'Please input a number!!!!';
              }
            }
        }
        function errorsecondValue(){
            if(isset($_POST['submit'])){
                $secondValue = $_POST['secondvalue'];
              if(empty($secondValue)){
                echo 'Please input a number!!!!';
              }
            }
        }
    }




