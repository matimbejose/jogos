<?php
//vamos criar uma funcao caso ocora erros no carregamento de imagens
function thumb($arq) {
    $caminho = "fotos/$arq";
    if (is_null($arq) || file_exists($caminho)) {
        return "$caminho";

    } else {
        return "fotos/indisponivel.png";

    }
}
?>