<?php

 $a = "Hello World";

 $c = convert_uuencode($a);
 echo $c . "<br>";
 $d = convert_uudecode($c);
 echo $d;

?>
