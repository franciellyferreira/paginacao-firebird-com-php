<?php
require_once("funcoes.php");

/**
* Teste de Execução
* Informar a quantidade de registros a tabela que deseja paginar possui, por exemplo: 56870.
*/
$paginacao = paginar_indices(56870);
$first     = $paginacao['first'];
$indices   = $paginacao['paginacao'];

foreach($indices as $indice) {
    $skip = $indice['skip'];
    buscar_dados($first, $skip);
}