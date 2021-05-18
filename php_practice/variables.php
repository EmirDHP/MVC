<?php
// variable type number
$number = 10;
echo 'This is a number: '.$number;
echo '<br><br>';

// variable  type text
$text = "This a text";

echo 'My text is: '.$text;
echo '<br><br>';

// varibale type boolean
$boolean = true;

echo 'This is a variable type bool: '.$boolean;
echo '<br><br>';

// variable type array
$array = array("Sarahi", "Emir");

echo $array[0];
echo '<br><br>';

// variable type array with properties
$colors = array("color1"=>"red", "color2"=>"blue");

echo $colors["color2"];
echo '<br><br>';

// variable type object
$objet1 = (object)["furniture1"=>"chair", "furniture2"=>"desktop"];

echo $objet1->furniture2;

?>