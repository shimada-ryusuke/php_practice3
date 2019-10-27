<?php
$name = "tanaka";
if ($name == "ryusuke") {
  echo "私はryusukeです";
} else if($name != "ryusuke"){
  echo "$name"."はryusukeではありません";
}
?>

<?php
$total = 0;
for($i = 1; $i <= 10000; $i++){
$total += $i;
}
echo $total;
?>

<?php
$fruits = array("banana", "apple", "nasi", "suica", "tomato");
// $fruits から一つずつ要素を取り出して、$fruit に代入される

foreach($fruits as $fruit){
  echo "要素は" . $fruit;
  echo "\n";
}

?>
<?php
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 101;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}
?>