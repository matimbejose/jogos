<?php 
//vamos nos conectar com a base de dados
$banco = new mysqli("localhost", "root", "","db_games");
if ($banco->connect_errno) {
    echo "<p> encotrei um erro $banco->erno --> $banco->connect_error</p> ";
    die();

}

$banco->query("SET NAMES 'utf8'");
$banco->query("SET character_set_connection=utf8");
$banco->query("SET character_set_client=utf8");
$banco->query("SET character_set_results=utf8 ");



