<?php

session_start();

echo "Usuario:".$_SESSION["user"]."<br/>"."estatus:".$_SESSION["estatus"];
?>