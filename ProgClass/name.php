<?php
$varname=$_GET['fname'];
echo 'Hello! Welcome to ' . htmlspecialchars($varname,ENT_QUOTES, 'UTF-8');

?>