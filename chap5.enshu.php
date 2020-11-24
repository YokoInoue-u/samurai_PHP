<?php
function calc($a,$b){
    print($a * $b);
}

calc(2,3);

?>

<?php
function triangle_area($a,$h){
    return $a * $h /2;
}
print(triangle_area(2,3));
?>

<?php
$file_list = [];
function add_list($name){
    global $file_list;
    $file_name = $name.".php";
    array_push($file_list,$file_name);
}

add_list("function");
var_dump($file_list);

add_list("hello");
var_dump($file_list);

?>

