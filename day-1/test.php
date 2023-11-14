<?php 
$myName="Rahim Uddin";
$age= 24;
print "{$myName} I am $age years old";
$age=30;
print "\n{$myName} I am $age years old";

// php constant variable 
/*multi
line 
comment */
define("PI",3.1416);
define("sscGpaRahim",4.36);
echo "\nvalue of PI =".PI;
$constant="constant";
echo "\nvalue of PI={$constant('PI')}";
echo "\nMy SSC result is={$constant('sscGpaRahim')}"
?>