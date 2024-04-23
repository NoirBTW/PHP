<?php 
    class Stat {
        public static function test(int $x) {
            return "x = $x";
        }
    }

    // echo Stat::test(5);

    class User {
        private function __construct(
            private $name,
            private $role
        ) {}

        public static function takeAdmin(string $name) {
            return new self($name, 'admin');
        }
    }

    // $admin = new User('Lena', 'Golova');
    $admin2 = User::takeAdmin('Jora');
    // var_dump($admin2);

    class A {
        public static $x;
        public function getX () {
            return self::$x;
        }
    }

    A::$x = 5;
    $a = new A;
    // echo $a::$x;

    // echo $a->getX();

    class Human {
        private static $count;
        public function __construct() {
            self::$count++;
        }
        public function getCount () {
            return self::$count;
        }
    }

    $x = new Human();
    $y = new Human();
    $z = new Human();

    echo $z->getCount();