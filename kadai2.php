<?php
echo 'hello php!';
echo ("\n");
//1
$name = "yuki";
if($name = "yuki"){
  echo "「私は ゆき です」";
}
else {
  "「私はゆきではありません」";
}
echo ("\n");

//2
$total = 0;

for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total ;
echo ("\n");
//3 
$fruits = array("Apple","Banana","Orange","peach","Grapes");
foreach($fruits as $fruit){
echo $fruit; 
echo ("\n");
}
//4
//for文の始めの値を定義する //
$start = 1;
//for文の終わりの値を定義する//
$end = 100;

for ($i = $start; $i <= $end; $i++) {
  // 5で割り切れたら{}内を実行する//
if (($i % 5) == 0) {
  echo $i;
  echo ("\n");
}}


?>