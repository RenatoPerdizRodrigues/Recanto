<?php
    function dd($var){
        foreach($var as $key){
            var_dump($key);
        }
        die();
    }
?>