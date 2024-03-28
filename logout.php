<?php

session_start();
// DESTRUIR QUALQUER SESSÃO EXISTENTE
session_destroy();

header("Location: tela_login.php");
exit;