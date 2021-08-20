<?php

$VLink = $_GET['link'];

$VContext = stream_context_create(["http" => [
  "header" => "User-Agent: " . $_SERVER["HTTP_USER_AGENT"] . "; charset=UTF-8",
]]);

$VPagina = @file_get_contents($VLink, false, $VContext);

echo $VPagina;

?>