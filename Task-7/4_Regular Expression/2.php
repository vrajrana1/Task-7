<?php
$string = "Hello, world! 123";
$alpha_space_only = preg_replace("/[^a-zA-Z\s]/", "", $string);
echo $alpha_space_only;
?>