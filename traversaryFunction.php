<?php

$food = array('orange', 'banana', 'apple', 'grapes');

echo current($food);
echo key($food);
echo pos($food);

next($food);
echo "<b> Current :</b>" .current($food);
next($food);
echo "<b> Current :</b>" .current($food);

?>
