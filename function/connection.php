<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'losuit';

    $connection = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error());
