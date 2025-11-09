<?php
/**Função para conectar ao banco de dados */
function conexao(){
    $host = 'localhost';
    $user = 'root';
    $pass = 'senac@2025';
    $banco = 'projeto';
    /**Verifica se os dados de acesso estão corretos e caso estejam permite acesso ao banco */
    try {
        if(!$conectar = mysqli_connect($host, $user, $pass, $banco)){
            echo "Acesso negado no banco de dados: $banco";
            return null;
        }else{
            return $conectar;
        }
    } catch (Exception $e) {
        echo "Erro na Conexão: " . $e->getMessage();
    }
    
}
//Função para realizar uma conexão ao banco
function query($sql){
    $query = mysqli_query(conexao(), $sql);
    return $query;
}
//Função para retornar o número de linhas encontradas
function totalLinhas($query){
    $total = mysqli_num_rows($query);
    return $total;
}
//Função para retornar os itens encontrados 
function listarItens($qr){
    $dados = mysqli_fetch_assoc($qr);
    return $dados;
}