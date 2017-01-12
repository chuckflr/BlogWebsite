<!DOCTYPE html>
<html>
<body>

<h1>My second PHP page</h1>

<!-- PHP scripting starts here -->

<?php
echo "<h4>Hello World!</h4>";

$myString = "Hello World 2.";
$x = 3;
$y = 10;
$z = $x + $y;

echo "<p>" . $myString . "</p>";
echo "<p>" . $z . "</p>";

$txt = "W3Schools.com";
echo "I love $txt!";

define("PI", 3.1459265358979823, true);
echo "<h1>" . pi . "</h1>";

echo 0x12;

?>

<!-- PHP scripting stops here -->

</body>
</html>