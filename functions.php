<?php
//functions
$number=144;

$root =sqrt($number);
echo "$root";
echo "<br>";
echo  sqrt(1000);

echo "<br>";
echo pow(2.7,5.8);//arguments
echo "<br>";
echo max(12,13,23,78,67,79,100,4565);

echo "<br>";
echo min(45,56,75,45,67,68,67,78);

$X =63.23456;
echo "<hr>";
echo  round($X);
echo "<hr>";
echo round($X,4);
echo "<hr>";
echo floor($X);
echo "<hr>";
echo ceil($X);


$sentence="The quick brown fox jumped over a lazy dog.";
echo "<hr>";
echo strtoupper($sentence);
echo "<hr>";
echo strtolower($sentence);
echo "<hr>";
echo ucwords($sentence);
echo "<hr>";
echo str_word_count($sentence);
echo "<hr>";
echo  strlen($sentence);
echo "<hr>";

$password="keenny@k";
echo "<hr>";
echo md5($password);
echo "<hr>";
echo sha1($password);
//
echo "<hr>";
echo  crypt($password,"afshghdshftwreergt(_)fdghsferojliptroyiwqoqwsuyqtwygfdfjfdg");

//date
//files
//db
//email
//fetch data






























