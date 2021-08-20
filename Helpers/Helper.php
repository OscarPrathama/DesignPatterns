<?php
if (!function_exists('killNoDie')) {
    function killNoDie($data){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}

if (!function_exists('killNoDump')) {
    function killNoDump($data){
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    }
}