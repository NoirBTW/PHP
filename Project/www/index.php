<?php 

    require_once('../source/Models/Articles/articles.php');
    require_once('../source/Models/Users/user.php');

    function MyAutoloadRegistr(string $className) {
        require_once('../'.str_replace('\\', '/', $className).'.php');
    }

    spl_autoload_register(MyAutoloadRegistr($className));

    $user = new \source\Models\Users\User('Ivan');
    $article = new \source\Models\Articles\Article('new title', 'new text', $user);

    var_dump($article);