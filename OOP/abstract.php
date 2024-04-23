<?php 

    abstract class AbstractClass {
        abstract public function getValue();
        public function printValue () {
            echo 'Значение = '.$this->getValue();
        }
    }

    class A extends AbstractClass{
        public function __construct(
            public $value
        ) {}
        public function getValue() {
            return $this->value;
        }
    }

    $a = new A(909);
    $a->printValue();