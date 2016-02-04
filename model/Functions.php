<?php

class Functions
{
    public function IsPositive($number){
        if($number >= 0){
            return $number;
        }else{
            return 0;
        }
    }
}