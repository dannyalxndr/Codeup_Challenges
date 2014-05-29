<?php

// Create a function alphabet_soup($str) that accepts a string and will return the string in 
// alphabetical order. E.g. "hello world" becomes "ehllo dlorw". So make sure your function 
// separates and alphabetizes each word separately.

echo "Name your alphabet soup: ";
$soup = trim(fgets(STDIN));

// function that takes a string
function alphabetSoup($string) 
{
    // conversion of string to array
    $array = explode(' ', $string);
    // foreach loop to access the value
    foreach ($array as $key => $value) 
    {
        // new array based on character 
        $soup = str_split($value);
        // sort the arrays
        sort($soup);
        // array to string conversion
        echo implode($soup) . " ";
    }
    echo PHP_EOL;
}

alphabetSoup($soup);

