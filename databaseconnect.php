<?php
//iniciando a conexão com o banco de dados 
$cx = mysqli_connect("localhost", "root", "root");
 
//selecionando o banco de dados 
$db = mysqli_select_db($cx, "bancoteste");
 
//criando a query de consulta à tabela criada 
$sql = mysqli_query($cx, "SELECT * FROM cadastro") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);
?>
