<?php
$height = 160;
// もし $height が 150 未満の数値なら、 ifのあとの { } の中のコードが実行される
// それ以外なら、 else のあとの　｛ ｝ の中のコードが実行される

if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} else {
  echo "ご乗車になれます。";
}

//=> "ご乗車になれます。" が表示される。
?>
<?php
$height = 140;
// もし $height が 150 未満の数値なら、{ } のなかが実行される
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} 

//=> 何も表示されない
?>
<?php
$height = 230;

// もし $height が 150 未満の数値なら、 ifのあとの { } の中のコードが実行される
// もし $height が 200 以上の数値なら、 else ifのあとの{ }の中のコードが実行される
// それ以外なら、 else のあとの　｛ ｝ の中のコードが実行される
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} else if ($height >= 200){
  echo "200cm 以上の方はご乗車できません。";
}else {
  echo "ご乗車になれます。";
}
//=> "200cm 以上の方はご乗車できません。" が表示される。
?>
<?php
$weekday = "月曜";
// $weekday が月曜だったら「可燃ごみの日です。」、 水曜だったら「資源ごみの日です。」、それ以外だったら「回収はありません。」
// と表示される
switch ($weekday) {
  case "月曜":
    echo "可燃ごみの日です。";
    break;
  case "水曜":
    echo "資源ごみの日です。";
    break;
  default:
    echo "回収はありません。";
    break;
}
//=> 可燃ごみの日です。 が表示される
?>
<?php
$weekday = "月曜";
// $weekday が月曜だったら「可燃ごみの日です。」、 水曜だったら「資源ごみの日です。」、それ以外だったら「回収はありません。」
// と表示したい
switch ($weekday) {
  case "月曜":
    echo "可燃ごみの日です。";
  case "水曜":
    echo "資源ごみの日です。";
  default:
    echo "回収はありません。";
}
//=> 可燃ごみの日です。 資源ごみの日です。回収はありません。 と表示されてしまう。
?>
<?php
$weekday = "木曜";
// $weekday が月曜か木曜だったら「可燃ごみの日です。」、 水曜だったら「資源ごみの日です。」、それ以外だったら「回収はありません。」
// と表示したい
switch ($weekday) {
  case "月曜":
  case "木曜":
    echo "可燃ごみの日です。";
    break;
  case "水曜":
    echo "資源ごみの日です。";
    break;
  default:
    echo "回収はありません。";
    break;
}
//=> 可燃ごみの日です。 
?>
<?php
$a = 3;
$b = 3;
$c = "3";

// $a と $b が等しいときに true　そうでなければ false を返す。
var_dump($a == $b);
//=> bool(true) が表示される。

// $a と $b が等しくないときに true
var_dump($a != $b);
//=> bool(false)　が表示される。

// $a が $b　より大きいときに　true、そうでなければ false を返す。
var_dump($a > $b);
//=> bool(false)が表示される

// $a が $b 以上のときtrue、そうでなければ false を返す。
var_dump($a >= $b);
//=> bool(true) が表示される。

// $a が $b より小さいときtrue、そうでなければ false を返す。
var_dump($a < $b);
//=> bool(false)が表示される

//$a が $b より小さいか、または等しいときに true、そうでなければ false を返す。
var_dump($a <= $b);
//=> bool(true) が表示される。

//$a が $c　とデータ型が等しく、かつ値も等しいときに true、そうでなければ false を返す。
var_dump($a === $c);
//=> bool(false)が表示される。

//$a が $c　とデータ型が等しくないか、もしくは値が等しくないときに true、そうでなければ false を返す。
var_dump($a !== $c);
//=> bool(true)が表示される。
?>
<?php
for($i = 0; $i < 10; $i++){
  echo $i;
}
//=> 0123456789 が表示される。
?>
<?php
$total = 0;
echo $total;
//=> 0 と表示される。

// $iが0から始まり、$iが１００以下の間繰り返し処理を行う。
for ($i = 0; $i <= 100; $i++) {
  $total += $i;
}
echo $total;
//=> 5050 と表示される。
?>
<?php
# 配列の全ての要素を出力
$fruits = array("apple", "orange", "lemon");

echo count($fruits);
//=> 3 と表示される。

for ($i = 0; $i < count($fruits); $i++) {
  echo "要素は" . $fruits[$i];
  echo "\n";
}
//=> 要素はapple
//=> 要素はorange
//=> 要素はlemon
//=> と表示される
?>
<?php
$animals = array("dog", "cat", "panda");
// $animals から一つずつ要素を取り出して、$animal に代入される

foreach($animals as $animal){
  echo "要素は" . $animal;
  echo "\n";
}

//=> 要素はdog
//=> 要素はcat
//=> 要素はpanda
//=> と表示される
?>
<?php
// この1行はコメントになる

/*
    この部分はすべて
    コメントになるため
    プログラムとして
    動作しない
*/
?>