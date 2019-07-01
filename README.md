# Paginação de dados Firebird e PHP

<p>A paginação de dados é necessária quando uma grande quantidade de dados precisa ser obtida do banco de dados, porém na maioria das vezes pegar todos os dados de uma só vez não é boa solução e pra isso cria-se a paginação que nada mais é que obter os dados em pequenas quantidades (assim como paginar um livro).</p>

<p>Fiz este exemplo para o banco de dados Firebird, portanto foi utilizada a seguinte Query:</p>

> SELECT FIRST X SKIP Y * FROM TABELA_DADOS

<p>
X = Quantidade de dados que serão selecionados<br>
Y = Ponto de partida da seleção de dados<br>
TABELA_DADOS = Nome da tabela que será selecionada
</p>