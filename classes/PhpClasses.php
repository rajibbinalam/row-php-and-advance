<?php

abstract class PhpClasses{
    public function framework(){
        echo 'Base Class: '.__CLASS__.'<br/>';
        echo 'Base Class: '.get_class($this).'<br/>';
    }

}
