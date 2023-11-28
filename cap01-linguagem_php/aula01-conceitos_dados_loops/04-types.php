<?php
/**
 * Created by VisualStudioCode.
 * User: oalves
 * Date: 28/11/2023
 * Description: Tipos de variáveis e dados.
 */

 $idade = 25; // Inteiro (Integer)
 $preco = 19.99; // Ponto Flutuante (Float ou Double)
 $nome = "João"; // String
 $ativo = true; // Booleano
 $cores = array("vermelho", "verde", "azul"); // Array

 class Carro {
    public $modelo = "Fusca";
    public $ano = 1970;
 }
 $meuCarro = new Carro(); // Objeto

 $valorNulo = null; // Nulo (Null)
 $conexao = mysqli_connect("localhost", "usuario", "senha", "banco"); // Recursos (Resource)

 // Tipo Misto (Mixed)
 $variavelMista = "texto"; // Agora é uma string
 $variavelMista = 42;      // Agora é um inteiro

 $pessoa = array("nome" => "Maria", "idade" => 30); // Tipo de Dados Compostos