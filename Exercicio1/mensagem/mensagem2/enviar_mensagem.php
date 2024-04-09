<?php
session_start();
if(isset($_SESSION['mensagem'])) {
    echo $_SESSION['mensagem'];
} else {
    echo 'Nenhuma mensagem enviada.';
}

