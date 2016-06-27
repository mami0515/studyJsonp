<?php 
header("Content-Type:application/javascript; charset=utf-8");
echo '/* */' . $_GET['callback'] . '({"familyName":"oda","givenName":"mami"})';
?>