<?php
$var1="xyz"; //normal variable
$$var1="abcd";//variable variable
echo $var1 . "
";
echo $$var1 . "
";
echo "{$$var1} $xyz";
?>