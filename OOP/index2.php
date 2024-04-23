<?php 
    class User {
        public function __construct(
            private $name
        ) {}

        public function getName() {
            return $this->name;
        }
    }

    class Admin extends User {
        public function __construct($name, private $role = 'admin') {
            parent::__construct($name);
        }
    }

    class Article {
        public function __construct(
            private $title,
            private $text,
            private User $author
        ) {}

        public function getTitle () {
            return $this->title;
        }

        public function getText () {
            return $this->text;
        }

        public function getAuthor () {
            return $this->author;
        }
    }

    $user = new User('Ivan');
    $admin = new Admin('Olga');
    // $cat = new Cat('Murak', 'Green', 98698689);
    $article = new Article('new title', 'new text', $user);
    $article2 = new Article('new title', 'new text', $admin);

    var_dump($article2);


