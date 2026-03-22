<?php
include('../includes/db.php');  // Caminho relativo para incluir o db.php

if ($conn) {
    echo "Conexão bem-sucedida!";
} else {
    echo "Erro na conexão!";
}
?>