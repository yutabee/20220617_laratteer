<?php

if (!function_exists('greeting')) {
    /**
     * @param  string  $name
     * @return string
     */
    function greeting(string $name)
    {
        return "hello " . $name . "!!!";
    }
}
