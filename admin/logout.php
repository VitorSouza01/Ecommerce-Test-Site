
<!-- Logout Página Admin -->

<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
