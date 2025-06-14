<?php
setcookie('titular', '', time() - 3600);
header('Location: diario.php');
