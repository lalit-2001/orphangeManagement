<?php
include("dbconnection.php");
session_destroy();
header("Location: index.php");
?>