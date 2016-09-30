<?php 
    $first = new DateTime("12/25/1996");
    $second = new DateTime();
    $diff = $second -> diff($first);
    echo "<pre>";
    print_r($diff);
    echo "</pre><br>";
    echo "year ". $diff -> format("%y");