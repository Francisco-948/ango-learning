<?php
session_start();
session_unset();
session_destroy();
header('Location: ../index.php');// Redirecionar para a página de login após o logout
exit();
?>