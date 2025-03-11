<?php

// Get all php.ini settings as an associative array
$ini_settings = ini_get_all();

echo "<pre>";
foreach ($ini_settings as $section => $directives) {
    echo "[$section]\n";
    if (is_array($directives)) { // Check if $directives is an array
        foreach ($directives as $directive => $values) {
            if(is_array($values)){ //make sure $values is an array.
                echo "$directive = " . $values['local_value'] . "\n";
            } else {
                echo "$directive = " . $values . "\n"; //Handle cases where $values is not an array.
            }

        }
    } else {
        echo "Error: Directives for section '$section' are not an array.\n";
    }
    echo "\n";
}
echo "</pre>";
