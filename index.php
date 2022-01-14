<?php

// Premiere ligne

echo date("l");

echo "<br><br>";

echo date("Y.m.d", 1544431111);

echo "<br><br>";

$d = mktime(11, 35, 07);

echo date("H:i:s", $d);

