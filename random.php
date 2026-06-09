<?php
$secret = 1941;
$min_k = 6;
$max_k = 51519;
$k = rand($min_k, $max_k);
$value = $secret * $k;
echo "Random value is " . $value;
?>