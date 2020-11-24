<?php
function hello ($str){
    print($str);
}

hello("Hello World!")


?>
<?php
function hello2 (){
    print(39);
}

hello2();

?>

<?php
function hello3 ($a, $b){
    print($a + $b);
}

hello3(11,12);

?>
<?php
function hello4($a=21){
    print($a);
}
hello4();
Hello4("Hello4");
?>

<?php
function add ($a, $b){
    return $a + $b;
}

$num = add(2, 3);
print($num);
# => 5と表示される
?>