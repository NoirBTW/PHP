<?php
        setcookie('test', '123');

        echo $_COOKIE['test'];

        setcookie('test', '', time()); 
 ?>
