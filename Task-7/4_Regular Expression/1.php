<?php
$string = "abc123def456";
$numeric_only = preg_replace("/[^0-9]/", "", $string);
echo $numeric_only;
?>