<?php

$x = 10;
$y =& $x;

echo $x;
echo "<br>";
echo "$y";
echo "<br>";

$y = 15;
echo "<br>";
echo "depois de mudar y para 15<br>";
echo $x;
echo "<br>";
echo "$y";
echo "<br>";

$x = 85;
echo "<br>";
echo "depois de mudar x para 85<br>";
echo $x;
echo "<br>";
echo "$y";
echo "<br>";

