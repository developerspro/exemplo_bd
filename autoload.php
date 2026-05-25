<?php
spl_autoload_register(function ($nomeDaClasse) {
    $caminho = 'classes/' . $nomeDaClasse . '.php';
    if (file_exists($caminho)) {
        require_once $caminho;
    }
});