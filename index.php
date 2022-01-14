<?php

// Premiere ligne

echo date("l");

echo "<br><br>";

$d = mktime(null, null, null, 12, 10, 2018);

echo date("Y.m.d", $d);

echo "<br><br>";

$d = mktime(11, 35, 07);

echo date("H:i:s", $d);

