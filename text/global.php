<?php
$name = "侍太郎";

function func(){
    global $name;
    print($name);
}

func();

?>
