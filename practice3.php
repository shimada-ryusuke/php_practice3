
1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
<?php
function ds($dos){
    $result = 0;
    $result = $dos*2;
    return $result;
}
echo ds(6);
?>

2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
<?php
function f($a,$b){
    $result = 1;
    $result = $a+$b;
    return $result;
}
echo f(2,7);
?>

3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
<?php
function hogehoge($array){
   $return = 1;
   foreach($array as $value){
       $return = $return * $value;
   }
   return $return;
}
echo hogehoge(array(1,3,5,7,9));

?>

<?php
function multiply($arr){
  $result = 1;
  foreach($arr as $a){
    $result *= $a;
  }
  echo $result;
}
multiply(array(1, 3, 5 ,7, 9));
  echo "\n";
?>

4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
<?php
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 if ($max_number < $a){
     $max_number = $a;
 }
 //どうしたらいいかわからない・・・・
 }
 return $max_number;
 }
 echo max_array (array(15,100,2,3,4,10));
 echo "\n";
?>

5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
・strip_tags
指定した文字列からHTMLタグを取り除く。
<?php
$text = '<p>john wick3.</p><a href="#fragment">parabellum</a>';
echo strip_tags($text);
echo "\n";
?>

array_push
一つ以上の要素を配列の最後に追加する。
<?php
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
?>

array_merge
ひとつまたは複数の配列をマージする。
<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
?>

<?php
$array1 = array();
$array2 = array(1 => "data");
$result = array_merge($array1, $array2);
print_r($result);
?>

<?php
$array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
$array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
$result = $array1 + $array2;
var_dump($result);
?>

<?php
$beginning = 'foo';
$end = array(1 => 'bar');
$result = array_merge((array)$beginning, (array)$end);
print_r($result);
?>

time, mktime
mktime — 日付を Unix のタイムスタンプとして取得する。
<?php
// デフォルトのタイムゾーンを設定します。PHP 5.1 以降で使用可能です
date_default_timezone_set('UTC');

// 出力: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 8, 1, 2000));

// 出力例: 2006-04-05T01:02:03+00:00
echo date('c', mktime(1, 2, 3, 4, 5, 2012));
?>

<?php
echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
echo date("M-d-Y", mktime(0, 0, 0, 13, 1, 1997));
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 1998));
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 98));
?>

<?php
$lastday = mktime(0, 0, 0, 3, 0, 2000);
echo strftime("Last day in Feb 2000 is: %d", $lastday);
$lastday = mktime(0, 0, 0, 4, -31, 2000);
echo strftime("Last day in Feb 2000 is: %d", $lastday);
?>

time — 現在の Unix タイムスタンプを返す。
<?php
$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 日 * 24 時間 * 60 分 * 60 秒
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
// あるいは strtotime() を使用します
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";
?>

date — ローカルの日付/時刻を書式化する。
<?php
// 使用するデフォルトのタイムゾーンを指定します。PHP 5.1 以降で使用可能です。
date_default_timezone_set('UTC');


// 結果は、たとえば Monday のようになります。
echo date("l");

// 結果は、たとえば Monday 8th of August 2005 03:12:46 PM のようになります。
echo date('l jS \of F Y h:i:s A');

// 結果は July 1, 2000 is on a Saturday となります。
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

/* 書式指定パラメータに、定数を使用します。 */
// 結果は、たとえば Wed, 25 Sep 2013 15:28:57 -0700 のようになります。
echo date(DATE_RFC2822);

// 結果は、たとえば 2000-07-01T00:00:00+00:00 のようになります。
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
?>

<?php
// Wednesday the 15th のように出力
echo date('l \t\h\e jS');
?>

<?php
$tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
$lastmonth = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
$nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);
?>