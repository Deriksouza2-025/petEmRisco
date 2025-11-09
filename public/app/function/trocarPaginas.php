<?php
/**Função que irá atribuir o link nos itens do menu */
function trocarPaginas(){
    $tela = filter_input(INPUT_GET, 'tela', FILTER_SANITIZE_URL);
    // Verifica se existe a url
    $tela = (!$tela) ? "./home.php" : "{$tela}.php";
    if(!file_exists($tela)){
        throw new \Exception("A página não existe!");
    }
    return $tela;
}