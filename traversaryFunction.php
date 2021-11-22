<?php

$food = array('orange', 'banana', 'apple', 'grapes');

echo current($food) . "<br>";
echo "<b> Key :</b>" . key($food)  . "<br>";
echo pos($food). "<br>";

next($food);
echo "<b> Current :</b>" .current($food). "<br>";
next($food);
echo "<b> Current :</b>" .current($food) . "<br>";
prev($food);
echo "<b> Current :</b>" .current($food);
echo key($food) . "<br>";
reset($food);
echo "<b> Current :</b>" .current($food);
echo key($food);

?>
