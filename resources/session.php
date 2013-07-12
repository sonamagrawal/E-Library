<?php
if (!isset($_SESSION['email'])) {
    session_start();
    $_SESSION['email'] = 'sonamagrawal@gmail.com';
    $_SESSION['name'] = 'sonam';
}