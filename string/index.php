<?php
$paragraph = "Lorem ipsum dolor sit amet, consectetur adipiscing.";
$parts = explode(" ", $paragraph);
echo $paragraph;
print_r($parts);
$j = join(" ", $parts);
echo "\n" . $j;


echo (implode(' ', $parts));


print_r(str_split($paragraph, 5));
print_r(str_split($paragraph));


echo ("\n" . strpos($paragraph, 'sit'));


$replace = str_replace('sit', "Bangladesh", $paragraph);
echo "\n" . $replace;
