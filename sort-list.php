// Exercise 4
// Usage: call sortList function
// Example: sortList([$array = array(
	"Grade 4" => array("Erlan", "Bernie", "Ana"),
	"Grade 1" => array("Tesla", "BMW", "Honda"),
	"Grade 3" => array("Japan", "Australia", "UK"),
));

<?php 
    function sortList($array = []) {
        ksort($array);
        
        foreach ($array as $key => $value) {
            sort($value);

            foreach ($value as $index => $childValue) {
                echo $key . " = " . $childValue . "\n";
            }
        }
    }
?>