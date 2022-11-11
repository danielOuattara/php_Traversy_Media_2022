<?php
header("Content-type: text/plain");
/* ---------- String Functions --------

  https://www.php.net/manual/en/ref.strings.php
*/


$string = 'Hello World';


// Get the length of a string
echo strlen($string);
echo "\n----------------------------\n";


// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o');
echo "\n----------------------------\n";


// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');
echo "\n----------------------------\n";


// Reverse a string
echo strrev($string);
echo "\n----------------------------\n";


// Convert all characters to lowercase
echo strtolower($string);
echo "\n----------------------------\n";


// Convert all characters to uppercase
echo strtoupper($string);
echo "\n----------------------------\n";


// Uppercase the first character of each word
echo ucwords($string);
echo "\n----------------------------\n";


// String replace
echo str_replace('World', 'Everyone', $string);
echo "\n----------------------------\n";


// Return portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo "\n";

echo substr($string, 5);
echo "\n----------------------------\n";


// Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'YES';
}
echo "\n----------------------------\n";


// Ends with
if (str_ends_with($string, 'ld')) {
  echo 'YES';
}
echo "\n----------------------------\n";


// HTML Entities
$string2 = '<script>alert("Boom!")</script>';

echo $string2;

echo htmlentities($string2);
echo "\n";

echo htmlspecialchars($string2);
echo "\n----------------------------\n";


// Formatted Strings - useful when you have outside data
// Different specifiers for different data types

// string
printf('%s is a %s', 'Brad', 'nice guy');
echo "\n";

// int
printf('1 + 1 = %d', 1 + 1);
echo "\n";

// float
printf('1 + 1 = %f', 1 + 1);
echo "\n----------------------------\n";



// join OR implode

$message = ["Hello", "world"];
echo join($message);
echo "\n";
echo implode($message);
echo "\n";
echo join(' - ', $message);
echo "\n";
echo implode(" ", $message);

echo "\n----------------------------\n";


// join OR implode

$message = "Hello world";

$newMessage = explode("?", $message);
print_r($newMessage);

$newMessage = explode(".", $message);
print_r($newMessage);

$newMessage = explode(" ", $message);
print_r($newMessage);

$newMessage = str_split($message);
print_r($newMessage);

$newMessage = str_split($message, 2);
print_r($newMessage);

echo "\n";
