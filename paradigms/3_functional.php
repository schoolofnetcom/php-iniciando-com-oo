<?php

$input = array(22,34,17,18,14,13,22,25);
$filtro = function(int $age){
	return ($age >= 18);
};

$output = array_filter($input,function(int $age){
	return ($age >= 18);
});

print_r($output);