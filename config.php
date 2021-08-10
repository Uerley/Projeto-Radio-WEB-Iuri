<?php
session_start();
$conexao = new mysqli("localhost", "root", "usbw", "db_webradio");
if (mysqli_connect_errno()) {
die(mysqli_connect_error());
exit();
}