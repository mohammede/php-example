<?php
    print "without date_default_timezone_set<br>";
    $mktime = mktime(15,25,40,12,3,2024);
    echo date("r",$mktime);
    print "<br>";
    $gmmktime = gmmktime(15,25,40,12,3,2024);
    echo date("r",$gmmktime);
    print "<br>";
?>
<?php
    print "with date_default_timezone_set<br>";
    date_default_timezone_set("Africa/Casablanca");
    $mktime = mktime(15,25,40,12,3,2024);
    echo date("r",$mktime);
    print "<br>";
    $gmmktime = gmmktime(15,25,40,12,3,2024);
    echo date("r",$gmmktime);
?>
