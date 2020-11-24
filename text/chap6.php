<?php
$num = 9;
if($num >= 10){
    print("Hello World!");
}
?>
<?php
if($num > 10){
    print("numは10より大きい");
}elseif($num < 10 and $num < 5){
    print("numは10より小さく、かつ5より小さい");
}else{
    print("numは10です");
}
?>