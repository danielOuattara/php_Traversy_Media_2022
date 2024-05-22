<?php

/* Exceptions 
============== 

  PHP has an exception model similar to that of other 
  programming languages. 
  
  An exception can be thrown, and caught ("catch") within PHP. 
  
  Code may be surrounded in a try block, to facilitate the 
  catching of potential exceptions. 
  
  Each try must have at least one corresponding catch or finally block.
*/

function inverse($x)
{
  if (!$x) {
    throw new Exception('Division by zero.');
  }
  return 1 / $x;
}

# echo inverse(0); // Causes an exception to be thrown and stops script execution


/* Handles the exception
-------------------------*/


try {
  echo inverse(5) . ' ';
  echo '<br />';

  echo inverse(0) . ' ';
  echo '<br />';
  //
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), ' ';
}

echo '<br />';


// Finally block is executed regardless of whether an exception is thrown or not

try {
  echo inverse(5) . ' ';
  echo '<br />';
  //
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), ' ';
  echo '<br />';
} finally {
  echo 'First finally ';
}

echo '<br />';


try {
  echo inverse(0) . ' ';
  echo '<br />';
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), ' ';
  echo '<br />';
} finally {
  echo "Second finally ";
}
echo '<br />';


echo 'Hello World';
