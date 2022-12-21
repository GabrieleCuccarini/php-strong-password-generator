<?php
session_start();
echo $_SESSION['password'];

session_destroy();
?>