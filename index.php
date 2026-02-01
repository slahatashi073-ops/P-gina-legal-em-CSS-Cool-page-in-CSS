<?php
// Verifica se os dados foram enviados pelo método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os dados dos inputs do HTML
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha']

    // Formata o dado que será salvo
    $linha = "Nome: $nome - E-mail: $email - Senha: $senha". PHP_EOL;

    // Define o arquivo onde os dados serão salvos
    $arquivo = "dados.txt";

    // Salva o dado no arquivo (FILE_APPEND adiciona no final do arquivo)
    // O 'a' mode (append) é usado internamente pelo file_put_contents
    if (file_put_contents($arquivo, $linha, FILE_APPEND | LOCK_EX)) {
        echo "Dados salvos com sucesso!";
    } else {
        echo "Erro ao salvar os dados.";
    }
}
?>