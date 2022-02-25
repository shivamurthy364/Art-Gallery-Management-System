<?php

session_start();
session_destroy();
unset($_SESSION['fname']);
unset($_SESSION['artid']);
header("Location:../FrontEnd.html");
?>