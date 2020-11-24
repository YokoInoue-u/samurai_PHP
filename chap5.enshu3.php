<?php
$file_list = [];
function add_list($name){
    global $file_list;
    array_push($file_list,$name.".php");
}

add_list("function");
var_dump($file_list);

add_list("hello");
var_dump($file_list);

foreach ($file_list as &$file) {
    print($file."\n");
}
?>