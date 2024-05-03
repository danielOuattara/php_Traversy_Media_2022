<?php

/* ----------- Arrays ----------- */

/* If you need to store multiple values, 
you can use arrays. Arrays hold "elements" */


// Simple array of numbers
$numbers = [1, 2, 3, 4, 5];
// Using the array function to create an array of numbers
$numbers_2 = array(1, 2, 3, 4, 5);

// Simple array of strings
$colors = ['red', 'blue', 'green'];
$colors2 = array('red', 'blue', 'green');

// mixed values array
$mixed = [True, "one", 1];
var_dump($mixed);

// Outputting values from an array
echo $numbers[0];
echo $numbers[3] + $numbers[4];
echo '<br/>----------------------------------------<br/>';

// We can use print_r or var_dump to see the contents of an array
var_dump($numbers);
echo '<br/>----------------------------------------<br/>';
echo "<pre>";
print_r($numbers);
echo "</pre>";
echo "<pre>";
print_r($numbers_2);
echo "</pre>";


/* ------ Associative Arrays ----- */

/* Associative arrays allow us to use named keys to identify its values.*/

$colors = [
  1 => 'red',
  2 => 'green',
  3 => 'blue',
];
echo "<pre>";
print_r($colors);
echo "</pre>";


// Strings as keys
$hex = [
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => '#00f',
];

echo "<pre>";
print_r($hex);
echo "</pre>";

echo $hex['red'];
echo '<br/>';

var_dump($hex);
echo '<br/>----------------------------------------<br/>';

/* ---- Multi-dimensional arrays ---- */

/* Multi-dimensional arrays are often used to 
store data in a table format.*/

// Single person
$person1 = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

$person2 = [
  'first_name' => 'Mike',
  'last_name' => 'Tyson',
  'email' => 'm__tyson@gmail.com',
];

// Array of people
$people = [
  $person1,
  [...$person2],
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com',
  ],
  [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'jane@gmail.com',
  ],
];

echo "<pre>";
print_r($people);
echo "</pre>";

// Accessing values in a multi-dimensional array
echo $people[0]['first_name'];
echo $people[2]['email'];
echo '<br/>----------------------------------------<br/>';

// Encode to JSON

echo "<pre>";
print_r(json_encode($people));
echo "</pre>";

// Decode from JSON
$jsonObject = '{"first_name":"Brad","last_name": "Traversy","email":"brad@gmail.com"}';

echo "<pre>";
print_r(json_decode($jsonObject));
echo "</pre>";
