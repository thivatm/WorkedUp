<?php
session_start();

unset($_SESSION['basket']);
header('Location: basket.php');