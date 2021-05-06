<!DOCTYPE html>
    <html lang="pt-br">
        <head>
        <title>Listagem de jogos</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="estilos/estilo.css"/>
        </head>
    <body>
    <?php
    //conexao com  base de dados
    require_once "includes/banco.php";
    //conexao com meu arquivo de funcoes
    require_once "includes/funcoes.php";
?>
    <div id="corpo">
    <h1> Escolha seu jogo </h1>
    <table  class='listagem'> 
    <?php
    //query de bancos de dados
$busca= $banco->query("select*from jogos order by nome");
if(!$busca) {
    echo "<tr><td>Infelizmente a busca deu errado";
} else {
     if ($busca->num_rows == 0 ) {
         echo "<tr><td>Nenhum registo encotrado";
     }  else{
         while ($reg=$busca->fetch_object()) {
             //vamos pegar resultado de erro das imagens
             $t = thumb($reg->capa);
             //mostrar foto
             echo "<tr><td><img src='$t' class='mini'/>"; 
             //mostar nome
             echo "<td><a href='detalhes.php?cod=$reg->cod'>$reg->nome</a> ";
             //mostar adm 
             echo "<td>Adm";
         }
     }
 }

?>
     </table>


    </div>
    <?php
$banco->close(); 
    ?>


    </body>


    </html>