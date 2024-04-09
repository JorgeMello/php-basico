<?php
$item = array(); 
//Now isset($item) returns true. But isset($item['unicorn']) is false.
//empty($item) is true, and so is empty($item['unicorn']

$item['unicorn'] = '';
//Now isset($item['unicorn']) is true. And empty($item) is false. 
//But empty($item['unicorn']) is still true;

$item['unicorn'] = 'Pink unicorn';
//isset($item['unicorn']) is still true. And empty($item) is still false. 
//But now empty($item['unicorn']) is false;
?>