<?php

require("header.php");

    unset($_SESSION['profile']);
    session_destroy();
    header('Location: login.php')

?>