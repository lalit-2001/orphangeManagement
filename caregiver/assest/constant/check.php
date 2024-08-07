<?php
session_start();
if(empty($_SESSION['care_id'])){
 header("location:../index.php");


}



?>