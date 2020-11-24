<?php
$customers = ["侍太郎","侍二郎","侍三郎"];

foreach ($customers as &$customer){
    print($customer."\n");
}

?>

<?php
$data = [1, 2, "A"];

foreach ($data as &$d) {
    print($d + 1);
}
# => "A" + i のときに警告が出る
# 出なかった！！！（。。；）

?>

<?php
$data = [1, 2, 3];

print($data[0]."\n");
# => 1
print($data[2]."\n");
# => 3
print($data[3]);
# => 何も表示されない
# エラーメッセージ？でた！
?>

<?php
$data = [1, 2, 0.3];

array_push($data, "aiu");

var_dump($data);
?>

<?php
$data = [1, 2, 3];

var_dump(count($data));
?>