<?php
header("Content-type: text/plain");


/* --------- Array Functions -------- *

  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ["apple", "banana", "orange", "papaya"];

# Get array length
echo 'count($fruits) = ', count($fruits);

echo "\n----------------------------------------\n";


# Search array for a value: banana
echo in_array("banana", $fruits), "\n"; // 1
var_dump(in_array("banana", $fruits));  // true
print_r(in_array("banana", $fruits));  // 1

echo "\n----------------------------------------\n";


// Add to an array
$fruits[] = "grape";
echo '$fruits = ';
print_r($fruits);


array_push($fruits, "mango", "raspberry");
echo '$fruits = ';
print_r($fruits);

echo "\n----------------------------------------\n";


// Adds to the beginning
array_unshift($fruits, "kiwi");
echo 'array_unshift = ';
print_r($fruits);
echo "\n----------------------------------------\n";


// Remove last
array_pop($fruits);
echo 'array_pop($fruits) = ';
print_r($fruits);
echo "\n----------------------------------------\n";


// Removes first
array_shift($fruits);
echo 'array_shift($fruits) = ';
print_r($fruits);
echo "\n----------------------------------------\n";


// Remove specific element
unset($fruits[2]);
echo '$fruits = ';
print_r($fruits);
echo "\n----------------------------------------\n";


// Split an array into sub-array of certain count each
$chunkedArray = array_chunk($fruits, 2); // split in arrays of 2 items each
echo '$chunkedArray = ';
var_dump($chunkedArray);

echo "\n";

$chunkedArray = array_chunk($fruits, 2, true);
echo '$chunkedArray = ';
print_r($chunkedArray);
echo "\n----------------------------------------\n";


// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
echo '$arr3 = ';
var_dump($arr3);
print_r($arr3);
echo "\n----------------------------------------\n";


// Concatenate using Spread Operator
$arr4 = [...$arr1, ...$arr2];
echo '$arr4 = ';
var_dump($arr4);
print_r($arr4);
echo "\n----------------------------------------\n";


// create array by combining 2 arrays: first for Keys, and second for values
$a = ["green", "red", "yellow"];
$b = ["avocado", "apple", "banana"];
$c = array_combine($a, $b);
echo '$c = ';
var_dump($c);
echo '$c = ';
print_r($c);
echo "\n----------------------------------------\n";


// Array of keys
$keys = array_keys($c);
echo 'array_keys($c) = ';
var_dump($keys);
echo "\n----------------------------------------\n";

// Array of values
$keys = array_values($c);
echo 'array_values($c) = ';
var_dump($keys);
echo "\n----------------------------------------\n";


// Flip keys to values
$flipped = array_flip($c);
echo 'array_flip($c) = ';
print_r($flipped);
echo "\n----------------------------------------\n";


// Create array of numbers with range()
$numbers = range(1, 20, 3);
echo '$numbers = range(1, 20, 3) = ';
print_r($numbers);
echo "\n----------------------------------------\n";


// Map through array and create a new one
$newNumbers = array_map(function ($item) {
  return "Number ${item}";
}, $numbers);

echo '$newNumbers = ';
print_r($newNumbers);
echo "\n----------------------------------------\n";


$newNumbersPrime = array_map(function ($item) {
  return "Number ${item}";
}, [...$numbers]);


echo '$newNumbersPrime = ';
print_r($newNumbersPrime);
echo "\n----------------------------------------\n";


$newNumbers2 = array_map(fn ($item) => "Number ${item}", $numbers);
echo '$newNumbers2 = ';
print_r($newNumbers2);
echo "\n----------------------------------------\n";


$newNumbers2Prime = array_map(fn ($item) => "Number ${item}", [...$numbers]);
echo '$newNumbers2Prime = ';
print_r($newNumbers2Prime);
echo "\n----------------------------------------\n";


// Filter array
$lessThan10 = array_filter($numbers, fn ($item) => $item < 10);
echo '$lessThan10 = ';
print_r($lessThan10);
echo "\n----------------------------------------\n";


// Array Reduce
// "carry" holds the return value of the previous iteration
$sum = array_reduce($numbers, fn ($carry, $value) => $carry + $value);
echo '$sum = ';
print_r($sum);
echo "\n----------------------------------------\n";

$sum2 = array_reduce($lessThan10, fn ($carry, $value) => $carry + $value);
echo '$sumLessThan10 = ';
print_r($sum2);
echo "\n----------------------------------------\n";
