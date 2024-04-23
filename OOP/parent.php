<?php 
    class Post {
        public function __construct(
            protected $title,
            public $text
        ) {}

        public function setTitle (string $title) {
            $this->title = $title;
        }

        public function setText (string $text) {
            $this->text = $text;
        }

        public function getTitle () {
            return $this->title;
        }

        public function getText () {
            return $this->text;
        }
    }

    class Lesson extends Post{
        public $homework;
        public function __construct(string $title, string $text, string $homework) {
            parent::__construct($title, $text);
            $this->homework = $homework;
        }
        public function setTitle (string $title) {
            $this->title = $title;
        }
    }

    $post = new Post('title', 'text');
    $lesson = new Lesson('title', 'text', 'homework');
    echo $lesson->getTitle();
