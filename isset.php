<?php

/*The isset() function is an inbuilt function in 
PHP which checks whether a variable is set and is not NULL. */

$a = "";

if(isset($a) && !empty($a)) {

    echo " isset is set";

}else{
     echo " isset is  not set";
}


?>
