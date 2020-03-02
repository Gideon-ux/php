<?php
/*
 * Author:Gideon
 * Date:2/02/2020
 */
$firstname="Gideon";
$lastname="Olaitan";
$YOB="1990";
$person=['tall','fair','nigeria'];
$person1["height"]="tall";
$person1["complexion"]="fair";
$person1["nationality"]='nigeria';
//print 'My name is $firstname $lastname';
print ' My name is '.$firstname . ' ' .$lastname. "\n";
echo 'I was born in '.$YOB.', and I am ' .(2020-$YOB). 'years old'. "\n";
//declare your name here
//print your name here
echo " I am $person[0] and $person[1] living in $person[2]". "\n";
echo " I am $person1[height] and $person1[complexion] living in $person1[nationality]". "\n";


$person2["quality"]="nice";
$person2["complexion"]="dark";
$person2["height"]="short";

$person3["country"]="canada";
$person3["state"]="ohio";
$person3["street"]="judge street";

$person4["school"]="Newage school";
$person4["class"]="jss1";
$person4["age"]="12";

$person5["hobbie"]="running";
$person5["bestfood"]="rice";
$person5["drink"]="fanta";

$person6["religion"]="christian";
$person6["location"]="lagos";
$person6["region"]="shomolu";

print_r ($person3);





?>
