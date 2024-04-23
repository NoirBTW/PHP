<?php 
    class A {
        public function sayHello () {
            return 'Hi, Im A';
        }

        public function method1 () {
            return $this->method2();
        }

        public function method2 () {
            return 'Hi, Im A';
        }
    }

    class B extends A { 
        public function sayHello () {
            return parent::sayHello().', But Im B';
        }

        public function method2 () {
            return 'Hi, Im A';
        }
    }

    $a = new A;
    $b = new B;

    echo $b->method1();

    // var_dump($a instanceof A);
    // var_dump($b instanceof A);
    // echo $a->sayHello();
    // echo $b->sayHello();
