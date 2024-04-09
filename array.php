
<?php
print isset($a); // $a is not set. Prints false. (Or more accurately prints ''.)
$b = 0; // isset($b) returns true (or more accurately '1')
$c = array(); // isset($c) returns true
$b = null; // Now isset($b) returns false;
unset($c); // Now isset($c) returns false;
?>