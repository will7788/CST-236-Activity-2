<?php

include 'header.php';

if (isset($_SESSION['principal']) == false || $_SESSION['principal'] == false)
{
    header("Location: login.html");
}

?>
