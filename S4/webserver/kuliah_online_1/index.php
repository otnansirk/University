<?php
    echo "<h1>Hallo I'am Krisnanto | 185411144</h1>";
    foreach (scandir(getcwd()) as $value) {
        echo "<a href='http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].$value."'>$value</a><br>";
    }