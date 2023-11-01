<?php
$banco = "banco.txt";
/* concatenando as varaveis, ou seja, juntar tudo em uma unica linha
    $a."\n". $b."\n". $c."\n". d."\n". $e."\n" .*/
    # criando uma string com o conteúdo capturado do formulário

$conteudo = $_POST["email"] . "\n" . $_POST["senha"] . " \n";
# a cariavel $criar usa a função fopen abre o arquivo txt para escrever os dados vindo do formulário
$criar = fopen($banco, "a+");
fwrite($criar, $conteudo);

if ($criar == true) {
    echo "Dados Armazenados em banco.txt";
} else {
    echo "erro ao salvar dados em banco.txt";
}
fclose($criar);
header('Location: ../tela_cadastro/cadastro.html');

?>