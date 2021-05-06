<!DOCTYPE html>
    <html lang="pt-br">
        <head>
        <link rel="stylesheet" href="estilos/estilo.css" />
        <meta charset="utf-8"/>
        <title> Detalhes do jogo </title>
        </head>
    <body>
    <?php
    //vamos ligar com a banco de dados
    require_once "includes/banco.php";
    require_once "includes/funcoes.php";
?>
    <div id="corpo">
    <?php
    //pegando o codico da url
    $c = $_GET['cod'] ?? 0;
    //fazendo o select na base de dados
    $busca = $banco->query("select * from jogos where cod='$c' ");
    ?>
    <h1>Detalhes do jogo</h1>
    <table class='detalhes'>
 <?php
if(!$busca) {
  echo "<tr><td>Busca falhou! $banco->error";
} else {
    if($busca->num_rows == 1)  {
        $reg = $busca->fetch_object();
        $t = thumb ($reg->capa);
        echo "<tr><td rowspan='3'><img src='$t' class='full'/>";
        echo "<td> <h2>$reg->nome </h2>";
        echo "<tr><td>$reg->descricao";
        echo "<tr><td> Adm ";
    } else {
        echo "<tr><td> Nehum registo encotrado";
    }
}
 ?>
    </table>
    </div>
    </body>
    </html>