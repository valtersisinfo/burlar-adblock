<?php
  $link = $_GET['link']; //? Simplesmente pega o link através do GET

  //? Este trecho é importante para funcionar com qualquer site. Recomendo não remover.
  $context = stream_context_create(["http" => [
    "header" => "User-Agent: " . $_SERVER["HTTP_USER_AGENT"] . "; charset=UTF-8",
  ]]);

  //? Está função pega todo o texto HTML e copia para a variável $pagina
  $pagina = @file_get_contents($link, false, $context);

  //? Imprime a página com todas as propagandas
  echo $pagina;
?>