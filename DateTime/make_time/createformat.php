<?php   
    $dt = "25/12/1996";
    $date = DateTime::createFromFormat("d/m/Y",$dt);
    echo $date -> format("d/m/Y");