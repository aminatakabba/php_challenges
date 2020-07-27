<?php
$initial = '555'; 

// Convert to decimal from octal
$a = octdec($initial);
echo $a;

// Number of degrees
$b = deg2rad($a);
echo "\n";
echo $b;

// Taking the cosine
$c = cos($b);
echo "\n";
echo $c;

// Round to three decimal places
$d = round($c, 3);
echo "\n";
echo $d;

// Natural log
$e = log($d);
echo "\n";
echo $e;

// Absolute value
$f = abs($e);
echo "\n";
echo $f;

// Inverse or arc cosine
$g = acos($f);
echo "\n";
echo $g;

// Number of degrees
$h = rad2deg($g);
echo "\n";
echo $h;

// Round down
$i = floor($h);
echo "\n";
echo $i;

// Substract
$j = $i - 47;
echo "\n";
echo $j;

