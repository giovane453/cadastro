
<?php
    // Receber os dados do formulário
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    // Acessar o IF quando o usuário clicar no botão acessar do formulário
    if(!empty($dados['SendLogin'])){
        var_dump($dados);
    }
?>


<?php
    // Processamento do formulário
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    // Verifica se o formulário foi submetido
    if(!empty($dados['SendLogin'])) {
        echo "<pre>";
        var_dump($dados); // Exibe os dados recebidos (para debug)
        echo "</pre>";
    }

    // HTML do formulário (echo em PHP)
    echo '<!-- Formulário de login -->';
    echo '<form method="POST" action="">';
    echo '    <label>Usuário:</label>';
    echo '    <input type="text" name="usuario" placeholder="Digite o usuário"><br><br>';
    echo '    <label>Senha:</label>';
    echo '    <input type="password" name="senha_usuario" placeholder="Digite a senha"><br><br>';
    echo '    <input type="submit" name="SendLogin" value="Acessar">';
    echo '</form>';
?>