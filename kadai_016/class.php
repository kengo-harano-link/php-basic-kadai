<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP課題</title>
</head>

<body>
   <p>
       <?php
       // クラスを定義する
       class Food {
           // プロパティを定義する
           public $name;
           public $price;

          // メソッドを定義する
            public function show_price() {
                echo $this->price;
            }

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

        }

        class Animal {
           // プロパティを定義する
           public $name;
           public $height;
           public $weight;

          // メソッドを定義する
            public function show_height() {
                echo $this->height;
            }

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

        }

        // インスタンス化する
        $potato = new Food('potato', 250);
        $dog = new Animal('dog', 60, 5000);

        // インスタンス各プロパティの値を出力する
        print_r($potato); 
        echo '<br>';
        print_r($dog);
        echo '<br>';

       // プロパティにアクセスし、値を出力する
       echo $potato->price.'<br>';
       echo $dog->height;
       ?>
   </p>

</body>

</html>