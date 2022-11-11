<?php
/* ------------ Functions -----------

Syntax
--------
  function functionName($arg1, $arg2, ...) {
    # code to be executed
  }

Functions have their own local scope as opposed 
to global scope */

function registerUser()
{
  echo 'User has been registered ! <br />';
}


registerUser();


// Variables scope in function
//-----------------------------

$y = 12;
function AboutScope()
{
  global $y;
  echo "AboutScope: ";
  echo $y . "<br>";
}


AboutScope();




// Adding params
//----------------------

function registerUser2($username)
{
  echo "User ${username} has been registered!  <br />";
}


registerUser2('Brad');



// Returning values
//----------------------
function add($num1, $num2)
{
  return $num1 + $num2;
}


echo add(5, 5), "<br />";



// Adding default values
//----------------------
function subtract($num1, $num2 = 10)
{
  return $num1 - $num2;
}


echo subtract(1), "<br />";


/*Assigning anonymous functions to variables. 
Often used for closures and callback functions*/

$add = function ($num1, $num2) {
  return $num1 + $num2;
};


echo $add(5, 5);
echo '<br />';



// Arrow functions
//------------------

$greetings = fn () => print("Hello");
$greetings();

echo '<br />';


$greetings = fn ($name) => print($name);
$greetings("John");

echo '<br />';


$multiply = fn ($num1, $num2) => $num1 * $num2;
echo $multiply(5, 5);
echo '<br />';
print $multiply(5, 5);
