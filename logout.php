<?php
session_start();
unset($_SESSION['mail_institucion']);


session_destroy();

header("Location: login.php");
 ?>
