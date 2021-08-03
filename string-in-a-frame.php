// Exercise 5
// Usage: call stringInAFrame function
// Example: stringInAFrame(["Hello", "World", "in", "a", "frame"]);

<pre>
<?php
function stringInAFrame($array = []) {
    $max = getMax($array);
    $header = "";
    $footer = "";
    $print = "";

    for($i = 0; $i < ($max + 4); $i++) {
        $header .= "*";
        $footer .= "*";
    }

    foreach($array as $value) {
        $value1 = strlen($value);

        if ($value1 < $max) {
            for($y = 0; $y < $max; $y++) {
                $value .= " ";
            }

            $value = "* " . $value . "*" . "\n";
        } else {
            $value = "* " . $value . " *" . "\n";
        }

        $print .= $value;
    }

    print($header. "\n" .$print . $footer);
}

function getMax($array = []) {
    $max = 0;

    for($i = 0; $i < count($array); $i++) {
        if (strlen($array[$i]) > $max) {
            $max = strlen($array[$i]);
        }
    }

    return $max;
}
?>

</pre>