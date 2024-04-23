<?php
    class Cat {
        private $name;
        public $color;
        public $weigth;

        public function __construct(string $name, string $color, int $weigth) {
            $this->name = $name;
            $this->color = $color;
            $this->weigth = $weigth;
        }

        public  function sayHello () {
            return 'Кот говорит МЯЭУ';
        }

        public function setName (string $name) {
            $this->name = $name;
        }

        public function getName () : string {
            return $this->name;
        }
    }

    $cat = new Cat('Karl2', 'Purple', 1293);
    // $cat->setName('Karl');
    echo $cat->getName();
    // $cat->color = 'Seroburokozyavchatiy';
    // $cat->weigth = 25;
    // echo $cat->sayHello();
    // $cat1 = new Cat;
    // var_dump($cat);