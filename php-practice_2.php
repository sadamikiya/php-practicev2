<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
   if ($i % 4 == 0 && $i % 5 == 0) {
    echo "tic-tac\n";
  } elseif ($i % 4 == 0) {
    echo "tic\n";
  } elseif ($i % 5 == 0) {
    echo "tac\n";
  } else {
    echo $i . "\n";
  }
}

// Q2 多次元連想配列
Q2-1
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
foreach ($personalInfos as $info) {
  if ($info['name'] === 'Bさん') {
      echo "{$info['name']}の電話番号は{$info['tel']}です。";
      break;
  }
}

Q2-2
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
$num = 1;
foreach ($personalInfos as $info) {
  echo "{$num}番目の{$info['name']}のメールアドレスは{$info['mail']}で、電話番号は{$info['tel']}です。\n";
  $num++;
}

Q2-3
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

$ageList = [25, 30, 18];
foreach ($personalInfos as $key => &$status) {
  $status['age'] = $ageList[$key];
}
var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->setStudentName($name); 
    }

    public function setStudentName($name)
    {
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}
$student = new Student(120, '山田');
echo "学籍番号" . $student->studentId . "番の生徒は" . $student->studentName . "です。";

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->setStudentName($name);
    }

    public function setStudentName($name)
    {
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo $this->studentName . "は" . $subject . "の授業に参加しました。学籍番号：" . $this->studentId;
    }
}
$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
Q5-1
$today = new DateTime();
$today->modify('-1 month');
echo $today->format('Y-m-d');

Q5-2
$today = new DateTime();
$pastDate = new DateTime('1992-04-25');
$interval = $today->diff($pastDate);
echo "あの日から" . $interval->days . "日経過しました。";
?>
