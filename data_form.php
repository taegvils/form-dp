<?php
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    //Recebe os dados do formulário
    $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $data_nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : null;
    $habilidades = isset($_POST['habilidades']) ? $_POST['habilidades'] : [];
    $pais = isset($_POST['pais']) ? $_POST['pais'] : null;
    $comentarios = isset($_POST['comentarios']) ? $_POST['comentarios'] : null;

    //Validação básica (opcional)
    if (empty($nome) | empty($email) | empty($data_nascimento) | empty($habilidades) | empty($pais) | empty($comentarios)) {
        echo "Todos os campos são obrigatórios!<br> <a href='../avaliacao-formulario/index.html'>Voltar</a>";
    }
    else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo "Formato de email inválido!<br> <a href='../avaliacao-formulario/index.html'>Voltar</a>";
    } else {
        echo "Aqui estão seus dados:<br><br>";
        //Processa os dados (por exemplo, salva no banco de dados)
        echo "Nome: " . htmlspecialchars($nome) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "data de nascimento: " . htmlspecialchars($data_nascimento) . "<br>";
        echo "Habilidades: ";
        foreach ($habilidades as $habilidade) {
             echo htmlspecialchars($habilidade) . " ";
        }
        echo "<br>";
        echo "pais: " . htmlspecialchars($pais) . "<br>";
        echo "comentarios: " . htmlspecialchars($comentarios) . "<br>";
        echo "<a href='../avaliacao-formulario/index.html'>Voltar</a>";
        
    }
}
