<?php
    foreach (scandir(getcwd()) as $value) {
        echo "<a href='http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].$value."'>$value</a><br>";
    }