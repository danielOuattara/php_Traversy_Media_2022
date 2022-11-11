<?php

header('Content-type: text/plain');

var_dump(filter_var('bob@example.com', FILTER_VALIDATE_EMAIL));

var_dump(filter_var('http://example.com', FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED));

var_dump(filter_var('уникум@из.рф', FILTER_VALIDATE_EMAIL));

echo "\n-------------------------------------\n";

$vals = array(
  'on', 'On', 'ON', 'off', 'Off', 'OFF', 'yes', 'Yes', 'YES',
  'no', 'No', 'NO', 0, 1, '0', '1', 'true',
  'True', 'TRUE', 'false', 'False', 'FALSE', true, false, 'foo', 'bar', "", " "
);
foreach ($vals as $val) {
  echo var_export($val, true) . ': ';
  var_dump(filter_var($val, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
}

echo "\n-------------------------------------\n";


$email_a = 'joe@example.com';
$email_b = 'bogus';

echo (filter_var($email_a, FILTER_VALIDATE_EMAIL)), "\n";
var_dump(filter_var($email_a, FILTER_VALIDATE_EMAIL));

echo (filter_var($email_b, FILTER_VALIDATE_EMAIL)), "\n";
var_dump(filter_var($email_b, FILTER_VALIDATE_EMAIL));


echo "\n-------------------------------------\n";

$email_a = 'joe@example.com';
$email_b = 'bogus';

if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
  echo "Email address '$email_a' is considered valid.\n";
}

if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
  echo "Email address '$email_b' is considered valid.\n";
} else {
  echo "Email address '$email_b' is considered invalid.\n";
}

echo "\n-------------------------------------\n";


$ip_a = '127.0.0.1';
$ip_b = '42.42';

if (filter_var($ip_a, FILTER_VALIDATE_IP)) {
  echo "IP address '$ip_a' is considered valid.";
}
if (filter_var($ip_b, FILTER_VALIDATE_IP)) {
  echo "IP address '$ip_b' is considered valid.";
}


echo "\n-------------------------------------\n";

$int_a = '1';
$int_b = '-1';
$int_c = '4';
$options = array(
  'options' => array(
    'min_range' => 0,
    'max_range' => 3,
  )
);

if (filter_var($int_a, FILTER_VALIDATE_INT, $options) !== FALSE) {
  echo "Integer A '$int_a' is considered valid (between 0 and 3).\n";
}
if (filter_var($int_b, FILTER_VALIDATE_INT, $options) !== FALSE) {
  echo "Integer B '$int_b' is considered valid (between 0 and 3).\n";
}
if (filter_var($int_c, FILTER_VALIDATE_INT, $options) !== FALSE) {
  echo "Integer C '$int_c' is considered valid (between 0 and 3).\n";
}

$options['options']['default'] = -1;


if (($int_c = filter_var($int_c, FILTER_VALIDATE_INT, $options)) !== FALSE) {
  echo "Integer C '$int_c' is considered valid (between 0 and 3).";
}

print_r($options);


echo "\n-------------------------------------\n";


$a = 'joe@example.org';
$b = 'bogus - at - example dot org';
$c = '(bogus@example.org)';
$d = 'уникум@из.рф';
//---------------------------------------------------
$sanitized_a = filter_var($a, FILTER_SANITIZE_EMAIL);
echo $sanitized_a, "\n";

if (filter_var($sanitized_a, FILTER_VALIDATE_EMAIL)) {
  echo "This (a) sanitized email address is considered valid.\n";
}
echo "---------\n";


//---------------------------------------------------
$sanitized_b = filter_var($b, FILTER_SANITIZE_EMAIL);
echo $sanitized_b, "\n";

if (filter_var($sanitized_b, FILTER_VALIDATE_EMAIL)) {
  echo "This sanitized email address is considered valid.";
} else {
  echo "This (b) sanitized email address is considered  NOT valid.\n";
}

echo "---------\n";

//---------------------------------------------------
$sanitized_c = filter_var($c, FILTER_SANITIZE_EMAIL);
echo $sanitized_c, "\n";

if (filter_var($sanitized_c, FILTER_VALIDATE_EMAIL)) {
  echo "This (c) sanitized email address is considered valid.\n";
  echo "Before: $c\n";
  echo "After:  $sanitized_c\n";
}

echo "---------\n";

//---------------------------------------------------

$sanitized_d = filter_var($d, FILTER_SANITIZE_EMAIL);
echo $sanitized_d, "\n";

if (filter_var($sanitized_d, FILTER_VALIDATE_EMAIL)) {
  echo "This (d) sanitized email address is considered valid.\n";
  echo "Before: $d\n";
  echo "After:  $sanitized_d\n";
} else {
  echo $d, " is not valid at all for anything \n";
}

echo "\n-------------------------------------\n";
/* 
--------------------------------------------------------------------------------------------
FILTER_SANITIZE_STRING             - Convert string to string with only alphanumeric, 
                                     whitespace, and the following characters - _.:
--------------------------------------------------------------------------------------------
FILTER_SANITIZE_EMAIL              - Convert string to a valid email address

--------------------------------------------------------------------------------------------
FILTER_SANITIZE_URL                - Convert string to a valid URL

--------------------------------------------------------------------------------------------
FILTER_SANITIZE_NUMBER_INT         - Convert string to an integer

--------------------------------------------------------------------------------------------
FILTER_SANITIZE_NUMBER_FLOAT       - Convert string to a float

--------------------------------------------------------------------------------------------
FILTER_SANITIZE_FULL_SPECIAL_CHARS - HTML-encodes special characters, keeps spaces and most 
                                     other characters 
--------------------------------------------------------------------------------------------
*/
