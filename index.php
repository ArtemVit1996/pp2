<?php
/**
Artem Vityuk
4/17/2020
https://github.com/ArtemVit1996/pp2.git
 **/

// error reporting for debugging only
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
    <header>
        <h1>Pair Program 2</h1>
    </header>
</head>
<body>
<?php
require "functions.php";
echo "<h2>----- Step 1 -----</h2>";
echo "<h3>PHP Array Practice</h3><br>";

echo "<h2>----- Step 2 ------</h2>";
echo "<h5>Numbers array: </h5>";
$numbers = array( "7", "9", "8", "9", "8", "8", "6");
printArr($numbers);

echo "<h2>----- Step 3 -----</h2>";
echo "<p>functions.php created</p>";


echo "<h2>----- Step 4 -----</h2>";
echo "<p>Largest array prints: </p>"."<p>". largest($numbers)."</p>";
?>

</body>
</html>