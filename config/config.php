<?php
    $mysqli = new mysqli("localhost","root","","register");

    // Check connection
    if ($mysqli -> connect_errno) {
    echo "đéo kết nối được: " . $mysqli -> connect_error;
    exit();
    }
?>