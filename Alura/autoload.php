<?php
spl_autoload_register(function (string $nomeCompletoClasse)
{
    $caminho = str_replace('Alura\\Banco', 'src', $nomeCompletoClasse);
    // $caminho = str_replace('\\', DIRECTORY_SEPARATOR, $nomeCompletoClasse);
    $caminho .= '.php';
    
    if (file_exists($caminho)) {
        require_once $caminho;
    }  
});

?>