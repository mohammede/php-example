<?php
    $mktime = mktime(15,25,40,12,3,2024);
    echo date("r",$mktime);
    print "<br>";
    $gmmktime = gmmktime(15,25,40,12,3,2024);
    echo date("r",$gmmktime);
    //see timezone.php
?>
