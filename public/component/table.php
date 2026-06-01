<hr>

<h4>Usuários Cadastrados</h4>

<!-- Tabela para exibição dos usuários -->
<table border="1" cellpadding="2">

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
    </tr>

    <?php

    // Consulta todos os usuários cadastrados
    $sqlUsuarios = "SELECT * FROM users";

    // Executa a consulta
    $resultadoUsuarios = $conn->query($sqlUsuarios);

    // Percorre cada registro retornado
    while($linha = $resultadoUsuarios->fetch_assoc()){

        // Exibe os dados na tabela
        echo "<tr>

            <td>" . $linha["id"] . "</td>
            <td>" . $linha["username"] . "</td>
            <td>" . $linha["password"] . "</td>

        </tr>";
    }

    ?>

</table>