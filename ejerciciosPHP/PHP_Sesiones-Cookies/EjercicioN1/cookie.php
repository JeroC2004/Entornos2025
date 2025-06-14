<?php
if (isset($_POST["modo"])) {
    setcookie("modo", $_POST["modo"], time() + (86400 * 30));
} //setea la cookie modo con el valor del formulario y la fecha de expiración a 30 días
