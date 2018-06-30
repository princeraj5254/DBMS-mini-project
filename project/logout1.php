<?php
    session_start();
    unset($_session['username']);
    header('location:insurance.php');
?>