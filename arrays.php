<?php
//arrays
$names=["Mary","Musa","JOhn","James","Okelo","Jack","Ray","Kay","Mike","Moha","Mendi"];

$ages=[4,6,78,79,98,23,34,45,65,23,57,25,34,67,89,90,45,56,32,21,11];

echo $names[4];
echo "<hr>";
echo $ages[10];
echo "<hr>";

foreach ($names as $jina)
{
 echo "$jina<br>";
}
echo "<hr>";
/*foreach ($ages as $miaka)
{
    echo "$miaka<br>";
}*/
echo "<hr>";
echo sizeof($names);//counts the number of names
echo "<hr>";

array_push($names,"Bush","kennu");
    echo sizeof($names);
    echo "<hr>";
    var_dump($names);
    echo "<hr>";
    array_pop($names);
echo "<hr>";
var_dump($names);

echo "<hr>";
sort($ages);

foreach ($ages as $miaka)
{
    echo "$miaka<br>";
}
echo "<hr>";
echo array_sum($ages);
echo "<hr>";
$person=["names"=>"Mike","age"=>68,"color"=>"black","height"=>1.5];
echo $person["names"];
echo "<hr>";
echo $person["age"];
echo "<hr>";
echo $person["color"];
echo "<hr>";
echo $person["height"];

















