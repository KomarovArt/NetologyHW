<?php

//$variable = 3.14;
// $variable = 3;
// $variable = 'one';
// $variable = true;
// $variable = null;
 $variable = [];

$type="";

if (is_float($variable)){
    $type="float";
}elseif (is_int($variable)){
    $type="int";
}elseif (is_string($variable)){
    $type = "string";
}elseif (is_bool($variable)){
    $type="bool";
}elseif (is_null($variable)){
    $type="null";
}else{
    $type = "other";
}

echo ("type is $type");

