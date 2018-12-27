<?php
$text   = "           ------This is a test -- string :) ...     ";
$hello  = "Hello World";
var_dump($text);
var_dump($hello);
$trimmed= trim($text);
//làm mất đi space trên test
var_dump($trimmed);
$trimmed = trim($text," -.");
var_dump($trimmed);
$trimmed = trim($hello, "Hdle");
var_dump($trimmed);
echo "<br />";
?>