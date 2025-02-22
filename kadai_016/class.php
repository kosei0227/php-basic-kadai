<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>kadai_016</title>
    </head>

    <body>
        <p>
        <?php

        class Food {

            private $name;
            private $price;

            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price() {
                echo $this->price.'<br>';
            }

        }


        class Animal {
            private $name;
            private $height;
            private $waight;

            public function __construct(string $name, int $height, int $waight) {
                $this->name = $name;
                $this->height = $height;
                $this->waight = $waight;
            }

            public function show_height() {
                echo $this->height.'<br>';
            }
        }



        $piza = new Food('ピザ',800);
        print_r($piza);
        echo '<br>';
        $piza->show_price();

        echo '<br>';

        $cat = new Animal('ネコ',200,10);
        print_r($cat);
        echo '<br>';
        $cat->show_height();
        ?>
        </p>
    </body>

</html>