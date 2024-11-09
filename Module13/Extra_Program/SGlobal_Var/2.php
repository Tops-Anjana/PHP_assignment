<!-- $_SERVER: Write a script to display various details of the server environment using
 $_SERVER (like PHP_SELF, SERVER_NAME, HTTP_USER_AGENT, etc.). -->

<?php
    echo $_SERVER['PHP_SELF'];
    echo "<BR>";
    echo $_SERVER['SERVER_NAME'];
    echo "<BR>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<BR>";
    echo $_SERVER['HTTP_HOST'];
    echo "<BR>";


?>