// Exercise 5
// Usage: call stringInAFrame function
// Example: stringInAFrame(["Hello", "World", "in", "a", "frame"]);

<pre>
<?php
function stringInAFrame($array = []) {
    $max = getMax($array);
    $header = "";
    $footer = "";
    $content = "";

    foreach($array as $value) {
        $ctr = 0;
        $end = "";

        for ($i = 1; $i <= ($max - strlen($value)); $i++) {
            $end = " " . $end;
        }

        $content .= "* " . $value . $end . " *\r\n";
    }

    for ($i = 1; $i <= ($max + 4); $i++) {
        $header .= "*";
    }

    echo $header . "\r\n" . $content . $header;
}

function getMax($array = []) {
    $max = 0;

    for ($i = 0; $i < count($array); $i++) {
        if (strlen($array[$i]) > $max) {
            $max = strlen($array[$i]);
        }
    }

    return $max;
}
?>

</pre>