<?php
// Q1 変数と文字列
$name = '佐田';
 $sentence = '私の名前は「' . $name . '」です。';
   echo $sentence;

// Q2 四則演算
$num = 5 * 4;
echo $num . "\n";
echo $num / 2;

// Q3 日付操作
$message = "現在時刻は " . date('Y年m月d日H時i分s秒') . " です";
echo $message;

// Q4 条件分岐-1 if文
$device = "windows"; 
$os = "どちらでもありません";

if ($device == "windows") {
    $os = "windows";
} else {
    if ($device == "mac") {
        $os = "mac";
    } else {
        $os = "どちらでもありません";
    }
}

echo "使用OSは、$os です。";

// Q5 条件分岐-2 三項演算子
$age = 18;
$message = ($age > 20 )? '未成年です。': '成人です。';
 echo $message;

// Q6 配列
$kanto = array('東京都', '神奈川県', '栃木県', '千葉県', '埼玉県', '群馬県');
echo $kanto[2] . 'と' . $kanto[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$kantoCapitals = array(
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
  );
foreach($kantoCapitals as $capital) {
    echo $capital . "\n";
}

// Q8 連想配列-2
$kantoCapitals = array(
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
);

foreach ($kantoCapitals as $prefecture => $city) {
  if ($prefecture === '埼玉県') {
    echo $prefecture . 'の県庁所在地は' . $city . 'です。';
  }
}

// Q9 連想配列-3
$kantoCapitals = array(
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
);

$kantoCapitals['愛知県'] = '名古屋市';
$kantoCapitals['大阪府'] = '大阪市';

foreach ($kantoCapitals as $prefecture => $capital) {
    if ($prefecture === '東京都' ||
        $prefecture === '神奈川県' ||
        $prefecture === '千葉県' ||
        $prefecture === '埼玉県' ||
        $prefecture === '栃木県' ||
        $prefecture === '群馬県' ||
        $prefecture === '茨城県') {
        echo "{$prefecture}の県庁所在地は、{$capital}です。\n";
    } else {
        echo "{$prefecture}は関東地方ではありません。\n";
    }
}

// Q10 関数-1
function hello($name) {
  return "{$name}さん、こんにちは。";
 }
 echo hello('金谷さん') . "\n";
 echo hello('安藤さん') . "\n";
 
// Q11 関数-2
function calcTaxInPrice($price) {
  $tax_rate = 10; 
  $tax_included_price = $price * (1 + $tax_rate / 100);
  return $tax_included_price;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo "{$price}円の商品の税込価格は" . round($taxInPrice) . "円です。";

// Q12 関数とif文
function distinguishNum($number) {
  if ($number % 2 == 0) {
      return "{$number}は偶数です。";
  } else {
      return "{$number}は奇数です。";
  }
}
echo distinguishNum(11) . "\n";
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($grade) {
  switch ($grade) {
      case 'A':
      case 'B':
          return "合格です。";
      case 'C':
          return "合格ですが追加課題があります。";
      case 'D':
          return "不合格です。";
      default:
          return "判定不明です。講師に問い合わせてください。";
  }
}

echo evaluateGrade('A') . "\n";
echo evaluateGrade('Z');
?>
