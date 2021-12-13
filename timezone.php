<?php

date_default_timezone_set("Asia/Dhaka");
echo date_default_timezone_get(). "<br>";

$tz = timezone_open("Asia/Dhaka");
echo timezone_name_get($tz) . "<br>";

echo "<pre>";
print_r(timezone_location_get($tz));
echo "</pre>";

?>
