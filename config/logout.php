<?php

//inicia a sessão
session_start();

//muda o valor de logged_in para false
$_SESSION['logged_in'] = false;

//finaliza a sessao
session_destroy();

//retorna para o index.php
header('Location:../index.php');

?>