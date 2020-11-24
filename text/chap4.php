<?php
$data = [
    "name"=>"大泉",
    "gender"=>"男性",
    "age"=>46
];

$data['address'] = "東京";

var_dump($data);
print($data["address"])
?>

<?php
  $count = '5'; 
  print 'バナナが{$count}本あります。'; 
  print "バナナが{$count}本あります。";
?>

<?php
$data = [
    'name'=>'大泉',
    'gender'=>'男性',
    'age'=>'24'];
$data['gender']='女性';
var_dump($data);
print($data['gender']);
?>
