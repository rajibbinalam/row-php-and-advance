<?php
class SingleTone{
    private static $var;
    public function __construct() {
        if(!self::$var){
            self::$var = $this;
            echo "New Created Instance. <br/>";
            return self::$var;
        }else{
            echo "Old Instance. <br/>";
            return self::$var;
        }

    }

}

