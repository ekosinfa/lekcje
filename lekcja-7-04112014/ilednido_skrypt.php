<?php

$time1 = mktime(0, 0, 0, $m, $d, $Y);
$time2 = time();
$time = $time1 - $time2;
echo ceil($time / 86400);
echo ' dni';

//$m to miesiąc
//$d to dzień
//$Y to rok

?>
