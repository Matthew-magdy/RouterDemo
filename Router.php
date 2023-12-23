<?php

class Router
{
    public static function handle($method = 'GET', $path= '/', $file = '')
    {
       //print_r($_SERVER);
        $currentMethod = $_SERVER['REQUEST_METHOD'];
        $currentUri = $_SERVER['REQUEST_URI'];

        if($currentMethod != $method)
        {
            return false;
        }

        $root = '/RouterDemo';
        $pattern = '#^'.$root.$path.'$#isD';

        if(preg_match($pattern, $currentUri))
        {
            require $file;
            exit();
        }
        return false;
    }
}