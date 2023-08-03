<?php
declare(strict_types=1);

spl_autoload_register(function (string $nomeCompletoDaClasse){
    $caminhoDoArquivo = str_replace('DMB\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoDoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoDoArquivo);
    $caminhoDoArquivo .= '.php';

    if (file_exists($caminhoDoArquivo)) {
        require_once $caminhoDoArquivo;
    }
});