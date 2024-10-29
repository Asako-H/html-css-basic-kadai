<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <title>課題第16PHP</title>
</head>
<body>
    <p>
        <?php
        // クラスの定義
        class Food {
            // プロパティの定義
            private $name;
            private $price;

            // コンストラクタを定義
            public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
            }

            // 値段を表示するメソッドを定義
            public function show_price() {
                echo "$this->price <br>";
            }
        }       
            // インスタンス化する
            $food = new Food('potato', 250);

            // インスタンス$foodの値を出力
            print_r($food);
            echo '<br>';
            
        // クラスの定義
        class Animal {
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義
            public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
            }
            // 高さを表示するメソッドを定義
            public function show_height() {
                echo "$this->height <br>";
            }
        }

            // インスタンス化する
            $animal = new Animal('dog', 60, 5000);

            // インスタンスの$animalを出力
            print_r($animal);

            echo '<br>';
        

            // インスタンスのメソッドを実行
            $food->show_price();
            $animal->show_height();
        ?>
    </p>
</body>
</html>