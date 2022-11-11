<?php


/*File Handling 
================

  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file_path = './extra/users.txt';


/* 
readfile(): 
Returns the content and number of bytes read 
from the file on success, or FALSE on failure. 
---------------------------------------------*/

if (file_exists($file_path)) {
  echo readfile($file_path), "<br><br>";
}

/* 
  # fopen() gives you more control over the file.
  
  # Modes: r, w, a, x, r+, w+, a+, x+ See below for details
  
  # fread() reads the file and returns the content 
    as a string on success, or FALSE on failure. 
  
  # fclose() closes the file resource on success, or 
    FALSE on failure. 

  # PHP_EOL is a constant that represents the end of line character.
  
  # fwrite() writes the contents to the file and returns the number 
    of bytes written on success, or FALSE on failure.
*/


/* File Open, Read, Write, Close 
---------------------------------*/
if (file_exists($file_path)) {
  $handle = fopen($file_path, 'r+');
  $contents = fread($handle, filesize($file_path));
  fclose($handle);
  echo $contents;
} else {
  echo "File not Exist !";
  $handle = fopen($file_path, 'x+'); # Create the file
  $contents = 'Brad' .  PHP_EOL . 'Sara' .  PHP_EOL . 'Mike' .  PHP_EOL . 'John';
  fwrite($handle, $contents);
  fclose($handle);
}

/*
r	-  Open a file for read only. File pointer starts at the beginning of the file
w	-  Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	-  Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	-  Creates a new file for write only. Returns FALSE and an error if file already exists
r+ - Open a file for read/write. File pointer starts at the beginning of the file
w+ - Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+ - Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+ - Creates a new file for read/write. Returns FALSE and an error if file already exists
*/