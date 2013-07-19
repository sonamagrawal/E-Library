<?php
if (!isset($_SESSION['user_id'])) {
    session_start();
    $_SESSION['roll_no'] = '10118059';
    $_SESSION['user_id'] = ''; //For sake
    header("location:index.php") ;  //trend
}