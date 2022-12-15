<!-- 01_outputs -->

<?php
// echos stuff, strings,numbers, html
echo "Hello LOL! This is PHP! ", 900, " POG!";

// print, only 1 argument 
print " Hello This is print";

// print_R() -> single values and arrays
print_r([1, 2, 3]);

// var dump, shows data type and length
var_dump("1234");

// var_export, srtring rep of variable
var_export("test");
?>

<!-- END outputs -->

<!-- =========================================================== -->


<!-- 02_Variables -->
<?php 

// Data types
// Strings, Integers, Float, Boolean, Arrays, Objects, NULL, Resource

// Variables
// prefixed with "$", Case sensitive

$name = "Bobby";

$age = 92;

// will show as 1, use var_dump to show actual value, eg. true
$fortnite = true;

// double quotes = concatnate, single is not, can use  ${variable}
echo "Name: ", $name, " |",  " Age: ", $age, " | ". "Is fortnite player: ", $fortnite, "| ";

echo 25 + 25;

$sum = 5 + 100;

echo $sum;

// constants
define("VARIABLE_NAME", "VALUE");
define("os", "ubuntu");

echo VARIABLE_NAME;
echo os;
?>
<!-- END Variables -->

<!-- =========================================================== -->

<!-- 03_arrays -->
<?php

// ways to make array
$numbers = [1, 2, 3, 4, 5, 6];

$names = array("Bob", "John", "Paul");

print_r($numbers);

// list index

echo $numbers[0];

// Associative Array
$colors = [

    1 => "blue",
    4 => "green"
];

echo $colors[4];

// users use case, like a dictionary

$people = [

    "fname" => "bob",
    "lname" => "johnson",
    "email" => "bob@gmail.com"
];

echo $people["fname"];

?>

<!-- END arrays -->

<!-- =========================================================== -->

<!-- 04_conditonals -->

<?php
// operators, kinda like JS
//  <, >, <=, >=, ==, !=,!==


// if (condition) {

// stuff
// }

$age = 45;

if ($age == 50) {

    echo "Good Job boomer, why are u 50 bro";
} elseif ($age == 45) {

    echo "Lol why are u 45 years old bro";
}
else {
    echo "L + BOZO";
}
;

$list = ['items in list'];

if (empty($list)) {

    echo "EMPTY!!";
}else {

    echo "NOT EMPTY!!!";
    echo $list[0];
}

// fancy smancy

// if list is not empty, echo firt element, else is the  ":"

// can also be used to set variables, replace echo with var declaration 
echo !empty($list) ? $list[0] : "No posts";

// switch and case statements, yuck

$fruits = "apple";

switch($fruits) {
    case 'blueberry':
        echo "why u like blueberries?";
        break;
    case 'apple':
        echo "valid bro";
        break;
    default:
        echo "Not valid bro!";
}


?>

<!-- END conditionals -->

<!-- =========================================================== -->


<!-- 05_loops -->

<?php 

// php for loop, like javascript!

for($i = 0; $i <= 10; $i++) {
    echo $i;
}
;

// output = 012345678910

// PHP while loop

$i = 0;

while ($i <= 10) {

    // line break so looks better
    echo $i.'<br>';

    $i += 1;
}

// do while loop

// do {
    // code to be executed, even if condition is false in while loop
// } while(condition);


$y = 0;

do {

    echo $y . "<br>";

    $y += 1;
} while ($y <= 5);

// foreach loop, used for arrays
// can use reg for loop, instead of array.length, use count(array)

$colors = ["red", "green", "Purple"];

foreach ($colors as $color) {

    echo $color."<br>";
}

// red
// green
// Purple

foreach ($colors as $index => $color) {

    echo $index."--".$color."<br>";
}
;

// 0--red
// 1--green
// 2--Purple


?>

<!-- END loops -->


<!-- =========================================================== -->

<!-- 06_functions -->



<!-- END functions -->

<!-- =========================================================== -->




<!-- =========================================================== -->
<!-- =========================================================== -->
<!-- =========================================================== -->
<!-- =========================================================== -->
<!-- =========================================================== -->
<!-- =========================================================== -->
<!-- =========================================================== -->
<!-- =========================================================== -->
<!-- =========================================================== -->
<!-- =========================================================== -->
<!-- =========================================================== -->


