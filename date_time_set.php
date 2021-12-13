<?php

$date = date_create("2015-10-10");

date_time_set($date, 12, 20);

echo date_format($date, "d-m-Y h:i:s");

?>
