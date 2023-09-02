<?php

class LateStatingBinding{
    public static function getClass(){
        return __CLASS__;
    }
    
    public static function frame(){
        echo static::getClass();
    }

}

