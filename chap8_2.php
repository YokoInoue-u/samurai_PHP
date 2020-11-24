<?php
class Hoge
{
    function __construct(){
        $this->name = "大泉";
        $this->age = 46;
    }
}

$hoge = new Hoge();

$hoge->name = "藤村";
$hoge->age = 54;

print($hoge->name);
# => "藤村"
print($hoge->age);
# => 54
?>
