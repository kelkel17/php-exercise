<?php
    /*
    * Exercise 3
    * UsageL call computeTotalScore function
    * Example: computeTotalScore([1, 2, 3, 4, 5]);
    */
    function computeTotalScore($array = []) {
        $total = 0;

        foreach ($array as $key => $value) {
            if ($value == 8) {
                $total += 5;
            } elseif ($value % 2 == 0) {
                $total += 1;
            } else {
                $total += 3;
            }
        }

        return $total;
    }
?>