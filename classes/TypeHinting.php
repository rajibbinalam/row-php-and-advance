<?php

class TypeHinting{

    function __construct(object $obj){
        $obj->php();
    }

    public function abc(array $arr){
        foreach ($arr as $key => $value) {
            echo '<br/>' . $value . '<br/>';
        }
    }

    public function Numbers(int $n){
        echo $n;
    }


}
