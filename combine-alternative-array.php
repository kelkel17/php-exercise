<?php
    /*
    * Exercise 2
    * UsageL call arrayCombine function
    * Example: arrayCombine(["a", "b", "c"], [1, 2, 3]);
    */
    function arrayCombine($array1 = [], $array2 = []) {
        $newArray = array();

        if (is_array($array1) && is_array($array2)) {
            // Check if both array have same length
            if (count($array1) == count($array2)) {
                for($i = 0; $i < count($array1); $i++) {
                    $newArray[] = $array1[$i];
                    $newArray[] = $array2[$i];
                }
            } else {
                array_map(function ($a, $b) use (&$newArray) { 
                    $newArray[] = $a;
                    $newArray[] = $b;
                }, $array1, $array2);
            }
            
            return array_filter($newArray);
        } else {
            return "Paramaters should be both array";
        }
    }
?>