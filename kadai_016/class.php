<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       // クラスを定義する
       class Product {
           // プロパティを定義する
           public $name;

            // メソッドを定義する
            public function set_name(string $name) {
                $this->name = $name;
            }
            public function show_name() {
                echo $this->name . '<br>';
            }
        }

        // インスタンス化する
        $coffee = new Product();

        // メソッドにアクセスして実行する
        $coffee->set_name('コーヒー');
        $coffee->show_name();

       // インスタンス化する
       $shampoo = new Product();

       // プロパティにアクセスし、値を代入する
       $shampoo->name = 'シャンプー';

       // プロパティにアクセスし、値を出力する
       echo $shampoo->name;
       ?>
   </p>
    <p>
        <?php
        // クラスを定義する
        class User {
            // プロパティを定義する
            private $name;
            private $age;
            private $gender;

            // コンストラクタを定義する
            public function __construct(string $name, int $age, string $gender) {
                $this->name = $name;
                $this->age = $age;
                $this->gender = $gender;
            }
        }

        // インスタンス化する
        $user = new User('侍太郎', 36, '男性');

        // インスタンス$userの各プロパティの値を出力する
        print_r($user);
        ?>
    </p>
    <p>
      <?php
        class Event
        {
            public string $name;
            public string $date;
            public string $location;

            public function __construct(string $name, string $date, string $location)
            {
                $this->name = $name;
                $this->date = $date;
                $this->location = $location;
            }

            public function getDaysUntilEvent(): int
            {
                $today = new DateTime();
                $eventDate = new DateTime($this->date);

                return (int)$today->diff($eventDate)->format('%r%a');
            }
        }

        // インスタンスを作成
        $event = new Event(
            'プログラミング初心者向けセミナー',
            '2026-12-02',
            '東京国際フォーラム'
        );

        // 各プロパティに直接アクセスして出力
        echo 'イベント名：' . $event->name . PHP_EOL;
        echo '開催日：' . $event->date . PHP_EOL;
        echo '開催場所：' . $event->location . PHP_EOL;

        // 開催日までの日数を出力
        echo '開催日までの日数：' . $event->getDaysUntilEvent() . '日' . PHP_EOL;
      ?>
    </p>
</body>

</html>