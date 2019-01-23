<?php
$var1="garg";
$var2="hindu";
$var3="no spouse at time of marriage . I was treated with cruelty.My husband changed his religion to muslim ";
$output=Shell_exec("python3 /var/www/html/minor/surname.py '$var1' '$var2' '$var3' ");
echo ($output);
?>
