<?php 

    interface CalculateSquare {
        public function calculateSquare() : float;
    }
    class Rectangle implements CalculateSquare
    { 
        public function __construct(
            public $x,
            public $y
        ) {}
        public function calculateSquare() : float {
            return $this->x * $this->y;
        }
    }

    class Square implements CalculateSquare
    { 
        public function __construct(
            public $x
        ) {}
        public function calculateSquare() : float {
            return $this->x ** 2;
        }
    }

    class Circle {

        const PI = 3.14;
        public function __construct(
            public $radius
        ) {}
        public function calculateSquare() : float {
            return self::PI * ($this->radius ** 2);
        }
    }

    $object = [
        $rectangle = new Rectangle(3, 4),
        $square = new Square(4),
        $circle = new Circle(8)
    ];

    foreach ($object as $elem) {
        if ($elem instanceof CalculateSquare)
            echo 'Площадь равна: '.$elem->calculateSquare().'<br/>';
        else echo 'Объект не реализует интерфейс';
    }
