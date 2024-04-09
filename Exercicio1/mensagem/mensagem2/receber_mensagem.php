<?php
session_start();
if(isset($_POST['mensagem'])) {
    $_SESSION['mensagem'] = $_POST['mensagem'];
    echo 'Mensagem recebida com sucesso!';
}

