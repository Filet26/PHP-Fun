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

<?php 
// PHP functions\

// default value of steven
function myfunc($name="Steven") {

    echo "Hello ".$name."<br>";
}
;

myfunc("Bobby");

$add = fn($n1, $n2) => $n1 + $n2;

echo  $add(10, 3)

?>

<!-- END functions -->

<!-- =========================================================== -->

<!-- 07_array_functions -->

<?php

$games = ["Fortnite", "Valorant", "COD", "Roblox"];

// length of array

echo count($games);


// search array for a value, returns T/F (1 or 0)

echo in_array("COD", $games);

// add item to an array

// add to end
$games[] = "Minecraft";
array_push($games, "GTA V");

// add to beginning
array_unshift($games, "Kovaaks");

print_r($games);


// Remove from an array

// POP last item
array_pop($games);

// pop last item
array_shift($games);

// remove based on index, removes index too lmao

unset($games[1]);

// Split

$chunked_Arr = array_chunk($games, 2);

print_r($chunked_Arr);

// concatnate

$list1 = [1, 2, 3];
$list2 = [4, 5, 6];

$list_merge = array_merge($list1, $list2);

print_r($list_merge);

// range

$nums = range(1, 20);

print_r($nums);


// map
$newNums = array_map(function ($num) {
    return "Number {$num}";
}, $nums);

print_r($newNums);

// filter

$lessthan10 = array_filter($nums, fn($num) => $num <= 10);

print_r($lessthan10);

// reduce, whatever very nasty

?>

<!-- END array functions -->



<!-- =========================================================== -->


<!-- 08_string_functions -->
<?php

$string = 'Hello World';

// Get the length of a string
echo strlen($string);

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o');

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');

// Reverse a string
echo strrev($string);

// Convert all characters to lowercase
echo strtolower($string);

// Convert all characters to uppercase
echo strtoupper($string);

// Uppercase the first character of each word
echo ucwords($string);

// String replace
echo str_replace('World', 'Everyone', $string);

// Return portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo substr($string, 5);

// Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'YES';
}

// Ends with
if (str_ends_with($string, 'ld')) {
  echo 'YES';
}

// HTML Entities
$string2 = '<h1>Hello World</h1>';
echo htmlentities($string2);

// Formatted Strings - useful when you have outside data
// Different specifiers for different data types
printf('%s is a %s', 'Brad', 'fart smella');
printf('1 + 1 = %f', 1 + 1); // float

?>
<!-- END String_functions -->


<!-- =========================================================== -->


<!-- 09_superglobals -->
<?php
// Built in variables, available in all scopes
/* ---------- Superglobals ---------- */
//Built in variables that are always available in all scopes

/*
  $GLOBALS - A superglobal variable that holds information about any variables in global scope.
  $_GET - Contains information about variables passed through a URL or a form.
  $_POST -  Contains information about variables passed through a form.
  $_COOKIE - Contains information about variables passed through a cookie.
  $_SESSION - Contains information about variables passed through a session.
  $_SERVER - Contains information about the server environment.
  $_ENV - Contains information about the environment variables.
  $_FILES -  Contains information about files uploaded to the script.
  $_REQUEST - Contains information about variables passed through the form or URL.
*/

// var_dump($GLOBALS);
// var_dump($_GET);
// var_dump($_REQUEST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
    <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
    <li>System Root: <?php echo $_SERVER['SystemRoot']; ?></li>
    <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li>
    <li>Server Port: <?php echo $_SERVER['SERVER_PORT']; ?></li>
    <li>Current File Dir: <?php echo $_SERVER['PHP_SELF']; ?></li>
    <li>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></li>
    <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
    <li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
    <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
    <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></li>
  </ul>
</body>
</html>
<!-- END superglobals -->

<!-- =========================================================== -->

<!-- 10_get_post -->

<?php

echo $_GET['name'];
echo $_GET['age'];
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Bobby&age=45">Click Me</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div>
    <label for="name">name: </label>
    <input type="text" name="name">
</div>
<div>
    <label for="age">age: </label>
    <input type="text" name="age">
</div>
<input type="submit" value="Submit" name="submit">

</form>

<!-- END get_post -->

<!-- =========================================================== -->

<!-- 11_input_sanitation -->
<?php

// Input sanitation

// htmlspecialchars(), filter_input(), filter_var(), lots of ways to sanitize inputs

$name = htmlspecialchars($_GET['name']);
$age = htmlspecialchars($_GET['age']);

echo $name."<br>";
echo $age;
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<div>
    <label for="name">name: </label>
    <input type="text" name="name">
</div>
<div>
    <label for="age">age: </label>
    <input type="text" name="age">
</div>
<input type="submit" value="Submit" name="submit">

</form>

<!-- END input_sanitation -->

<!-- =========================================================== -->

<!-- 12_cookies -->

<?php

// Cookies, you already know, stored on the browser side, remember users

// Set cookies, key, value, expires(1 day)
setcookie('name', 'Bobby', time() + 86400);


if(isset($_COOKIE['name'])) {
    echo $_COOKIE["name"];
}

setcookie('name', '', time() - 86400)

?>

<!-- END cookies -->


<!-- =========================================================== -->

<!-- 13_sessions -->

<?php
// like cookies, but stored on the server, contains sensitive information

session_start();


$username = htmlspecialchars($_POST['username']);
$password = $_POST['password'];

if($username == 'bobby' && $password == 'password') {
    $_SESSION['username'] = $username;
    header("Location: /php-tutorial/extras/dashboard.php");
}else {
    echo "Wrong Password Buddy!";
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<div>
    <label for="username">Username: </label>
    <input type="text" name="username">
</div>
<div>
    <label for="password">Password: </label>
    <input type="password" name="password">
</div>
<input type="submit" value="Submit" name="submit">

<a href="extras/dashboard.php">To Dashboard!</a>

</form>


<!-- dashboard -->

<?php

session_start();

if(isset($_SESSION['username'])) {
    echo '<h1> Hello ' . $_SESSION['username'].'</h1>';
    echo '<a href="logout.php">Logout</a>';

}else {
    echo "<h1>Welcome Guest</h1>";
    echo "<a href='/php-tutorial/13_sessions.php'>Back to Home</a>";
}

?>

<!-- logout -->

<?php

session_start();

session_destroy();

header("Location: /php-tutorial/13_sessions.php")

?>

<!-- END sessions -->

<!-- =========================================================== -->

<!-- 14_file_IO-->

<?php

// FILE read and write, tom lane moment

// set file
$file = 'extras/fruits.txt';

// check if file exists, and read

if(file_exists($file)) {
    echo readfile($file)."<br>";
    // just like python fr
    $file_pointer = fopen($file, 'r');
    $contents = fread($file_pointer, filesize($file));
    fclose($file_pointer);
    echo $contents;
}else {
    // wrote to file if not exist
    $file_pointer = fopen($file, "w");
    $contents = "Apple" . PHP_EOL . "Peach" . PHP_EOL . "Strawberry";
    fwrite($file_pointer, $contents);
    fclose($file_pointer);
}

?>

<!-- END File_IO -->

<!-- =========================================================== -->

<!-- 15_file_upload -->

<?php

// really nasty nested if statements

if(isset($_POST['submit'])) {


    $allowed_ext = array('png', 'jpeg', 'jpg', 'gif');

    if(!empty($_FILES['upload']['name'])) {
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/{$file_name}";

        // get file extension 

        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));
        echo $file_ext;

        // validate the file type
        if ( in_array($file_ext,$allowed_ext)) {

            // check if file is less than 5mb
            if ($file_size <= 5000000) {
                move_uploaded_file($file_tmp, $target_dir);

                $message = '<p style="color: green";>File Uploaded</p>';
            }else {
                $message = '<p style="color: orange";>File Too big</p>';

            }

        }else {

            $message = '<p style="color: blue";>Choose a proper file bro</p>';

        }
    }else {
        $message = '<p style="color: red";>Choose a file bro</p>';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=, initial-scale=1.0" />
    <title>File Upload</title>
  </head>
  <body>
    <?php echo  $message ?? null; ?>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
    Select File to upload (Image)
    <input type="file" name="upload" id="">
    <input type="submit" value="Submit" name="submit">

</form>


  </body>
</html>


<!-- END file_upload -->

<!-- =========================================================== -->

<!-- 16_exceptions -->

<?php

// throwing

function validate($num) {
    if (!$num) {
        throw new Exception("Num Has to be Bigger Than Zero!!");
    }
    return $num;
}

// try catch blocks

try {
    echo validate(0);
} catch (Exception $e) {
    echo "Found an Exceptrion!!! ", $e->getMessage(), " ";
} finally {
    echo "First Finally";
}

?>

<!-- END exceptions -->

<!-- =========================================================== -->

<!-- 17_OOP -->

<?php

// OOP in PHP blah blah blah

class dog {
    // Public = access from anywhere
    // Private = Accessed from inside the class
    // protected = Accessed from inside the class and by inheriting 

    // properties of the class
    public $name;
    public $breed;

    // Constructor
    public function __construct($name, $breed){
        $this->name = $name;
        $this->breed = $breed;
    }

    // Class methods you already know this

    function set_name($name) {
        // aka. self.name = name(from param) 
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}


// create instance of dog

$steven = new dog("Steven", "Pug");

var_dump($steven);


// Inheritance
class shibaInu extends dog {

    public $color;
    public function __construct($name, $breed, $color){
        parent::__construct($name, $breed);
        $this->color = $color;
    }

    public function get_color() {
        return $this->color;
    }
}

$bobby = new shibaInu("bobby", "Shiba", "brown");

echo $bobby->get_color();

?>

<!-- END OOP -->

<!-- =========================================================== -->


