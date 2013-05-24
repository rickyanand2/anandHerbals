<?php
/* Redirect to a different page in the current directory that was requested */
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'view/pages/home.php';
header("Location: http://$host$uri/$extra");
exit;
?> 



4709056


Refernce no.: TPG: 25071616