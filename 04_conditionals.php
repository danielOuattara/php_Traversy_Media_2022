<?php

# header('Content-type: text/plain');
/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  <    Less than
  >    Greater than
  <=   Less than or equal to
  >=   Greater than or equal to
  ==   Equal to
  ===  Identical to
  !=   Not equal to
  !==  Not identical to
  ??   Null coalescing
*/


/* ---------- If Statements ---------

Syntax
-------

if (condition) {
  # code to be executed if condition is true
}
*/

$age = 20;

if ($age >= 18) {
  echo "You are old enough to vote!";
} else {
  echo 'Sorry, you are too young to vote.';
}

echo '<br/>';


// Dates
// $today = date("F j, Y, g:i a");

$t = date('H');

if ($t < 12) {
  echo 'Have a good morning!';
} elseif ($t < 17) {
  echo 'Have a good afternoon!';
} else {
  echo 'Have a good evening!';
}
echo '<br/>';



/* Check if an array is empty: 
  
  - isset() function will generate a warning or e-notice 
  when the variable does not exists. 
  
  - empty() function will not generate any warning or 
  e-notice when the variable does not exists.
  */

$posts = ['First post'];

if (!isset($posts[0])) {
  echo $posts[0];
} else {
  echo 'There are no posts: isset()';
}
echo '<br/>';

if (!empty($posts[0])) {
  echo $posts[0];
} else {
  echo 'There are no posts: empty()';
}
echo '<br/>';



/* -------- Ternary Operator -------- 

  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// Echo based on a condition (Same as above)
echo !isset($posts[0]) ? $posts[0] : 'There are no posts';

echo '<br/>';

echo !empty($posts[0]) ? $posts[0] : 'There are no posts';


// Assign a variable based on a condition
$firstPost = !empty($posts[0]) ? $posts[0] : 'There are no posts';
echo '<br/>';

$firstPost = !empty($posts[0]) ? $posts[0] : null;
echo '<br/>';

/* Null Coalescing Operator ?? (PHP 7.4)
Will return null if $posts is empty
 Always returns first parameter, unless first parameter happens to be NULL*/
$firstPost = $posts[0] ?? null;

var_dump($firstPost);


/* -------- Switch Statements ------- */

$favcolor = 'red';

switch ($favcolor) {
  case 'red':
    echo 'Your favorite color is red!';
    break;
  case 'blue':
    echo 'Your favorite color is blue!';
    break;
  case 'green':
    echo 'Your favorite color is green!';
    break;
  default:
    echo 'Your favorite color is not red, blue, nor green!';
}
