<?php
/**
* Função cria os índices de paginação para o Firebird.
*
* @author Franciélly Ferreira
* @since 21/08/2018
*
* First é a quantidade limite de dados que serão carregadas por vez.
* Skips é o ponto de partida de onde vai começar a pegar os dados.
*
* @param int quantidade total de registros que serão paginados
* @return array first quantidade de dados limite e paginacao todos os skips
*/
function paginar_indices(int $total_registros)
{
  $paginacao = [];
  $first = 5000;
  $total_paginacao = ceil($total_registros / $first);

  for($contador = 0; $contador < $total_paginacao ; $contador++) {
    $skip = ($first * $contador);
    $indices = ['skip'  => $skip];
    array_push($paginacao, $indices);
  }

  return [
    'first'     => $first,
    'paginacao' => $paginacao
  ];
}

/**
* Função que busca no banco de dados Firebird usando paginação.
*
* @author Franciélly Ferreira
* @since 22/08/2018
*
* ATENÇÃO!!
* Criar aqui o código que conectar com o banco de dados.
* Query exemplo: SELECT FIRST $first SKIP $skip * FROM NOME_TABELA
*
* @param int $first
* @param int $skip
*/
function buscar_dados(int $first, int $skip)
{
    print_r("FIRST: ".$first);
    echo "<br>";
    print_r("SKIP: ". $skip);
    echo "<br><br>";
}