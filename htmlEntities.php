<?php 
$tr2 = '<a href = "http://limonweb.ml">Visit My Website</a>';
$tr = "hello <b>World!</b> 'how are you'";
 echo $tr2. "<br>";

$htm = htmlentities($tr2, ENT_NOQUOTES);

echo html_entity_decode($htm);

echo "<pre>";
print_r(get_html_translation_table(HTML_ENTITIES));
echo "</pre>";


?>
