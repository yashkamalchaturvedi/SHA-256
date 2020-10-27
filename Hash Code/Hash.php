<?php

$data = "Hello world";

echo "<br>";

echo "data = ".$data;

echo "<br>";

$hash = hash("sha256", $data);

echo "hash = ".$hash;

exit;



