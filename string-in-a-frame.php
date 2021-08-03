// Exercise 5
// Usage: call stringInAFrame function
// Example: stringInAFrame(["Hello", "World", "in", "a", "frame"]);

<pre>
<?php
function stringInAFrame($array = []) {
    $max = 0;
    $header = "";
    $footer = "";
    $content = "";

    foreach($array as $value) {
        $ctr = 0;
        $end = "";

        if (strlen($value) > $max) {
            $max = strlen($value);
        }

        for ($i = 1; $i <= ($max - strlen($value)); $i++) {
            $end = " ".$end;
        }

        $content .= "* ".$value.$end." *\r\n";
    }

    for ($i = 1; $i <= ($max + 4); $i++) {
        $header .= "*";
    }

    echo $header."\r\n".$content.$header;
}
?>

</pre>