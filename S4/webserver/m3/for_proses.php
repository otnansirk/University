<?php

echo "<h4> Segitiga Pascal </h4>";
for ($i=5; $i > 0; $i--) { 
    for ($j=$i; $j > 0; $j--) { 
        echo "$j ";
    }
    echo "<br>";
}

echo "<br>";

for ($i=5; $i > 0; $i--) { 
    
    for ($j=$i; $j < 5; $j++) { 
        echo "&nbsp;&nbsp;&nbsp;";
    }
    for ($j=$i; $j > 0; $j--) { 
        echo "$j ";
    }
    echo "<br>";
}

echo "<hr>";
echo "<h4>Bilangan habis dibagi 7.</h4>";
for ($i=1; $i < 101; $i++) { 
    if (($i % 7) == 0) {
        echo "$i ";
    }
}
echo "<h4>Bilangan habis dibagi 7 dan 5.</h4>";
for ($i=1; $i < 101; $i++) { 
    if (($i % 7) == 0 && ($i % 5) == 0) {
        echo "$i ";
    }
}