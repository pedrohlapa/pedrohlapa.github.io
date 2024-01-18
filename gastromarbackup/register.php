<?php
    session_start();
    include_once('config.php');

    $sql = "SELECT * FROM usuarios WHERE datareserva >= CURDATE() ORDER BY id DESC";
    $result = $conexao->query($sql);    


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sistema</title>
</head>
<body>

    <header class="sidebar">
        <div class="sidebar-header">
            <img src="img/gastromar_logo_2021-300x105.png" alt="Gastromar Logo">
            <p>&lpar;Versão 0.0.1&rpar;</p>
        </div>
        <nav class="nav-links">
            <a href="initialsystem.php" id="nav-link"><i class="fa-solid fa-house"></i>Página Inicial</a>
            <a href="mapamesas.php" id="nav-link"><i class="fa-solid fa-location-dot"></i>Mapa de mesas</a>
            <a href="register.php" id="nav-link"><i class="fa-solid fa-book"></i>Registros</a>
            <a href="historico.php" id="nav-link"><i class="fa-solid fa-folder-open"></i>Histórico</a>
        </nav>
    </header>

    <main>
        <div class="main-header">   
            <div class="main-text">       
                <h1>Painel de controle Gastromar</h1>
                <h2>Registros</h2>
            </div>
        </div>

        <div class="main-body">

            <div class="register">
                <h2>2.Registros</h2>
                <p>A aba de Registro é o local centralizado para todos os dados dos clientes que fizeram reservas. Aqui, você encontrará detalhes completos dos usuários preenchidos nos formulários de reserva. Além de visualizar esses dados, você também terá o controle total sobre eles. Pode editar ou excluir colunas específicas para manter seu registro organizado e atualizado. Isso permite que você mantenha um histórico preciso de todas as interações com os clientes, facilitando o acompanhamento de informações importantes.</p>
            </div>


        <div class="table-container">  
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>Horário</th>
                    <th>Nº Adultos</th>
                    <th>Nº Crianças</th>
                    <th>Brisa</th>
                    <th>Pet</th>
                    <th>Restrição</th>
                    <th>O. Especial</th>
                    <th>Data Reserva</th>
                    <th>Mesa</th>
                    <th>Periodo</th>
                    <th>Status</th>
                    <th>...</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) 
                    {

                    $datareserva = $user_data['datareserva'];
                    $dataFormatada = date("d-m-Y", strtotime($datareserva));

                    $statusClass = $user_data['disponibilidade'] == 'Confirmada' ? 'confirmed-bg' : '';
                    echo "<tr class='$statusClass'>";
                        echo '<td class="expandable">' . $user_data['id'] . '</td>';
                        echo '<td class="expandable">' . $user_data['nome'] . '</td>';
                        echo '<td class="expandable">' . $user_data['email'] . '</td>';
                        echo '<td class="expandable">' . $user_data['celular'] . '</td>';
                        echo '<td class="expandable">' . $user_data['horario'] . '</td>';
                        echo '<td class="expandable">' . $user_data['adultos'] . '</td>';
                        echo '<td class="expandable">' . $user_data['criancas'] . '</td>';
                        echo '<td class="expandable">' . $user_data['brisa'] . '</td>';
                        echo '<td class="expandable">' . $user_data['pet'] . '</td>';
                        echo '<td class="expandable">' . $user_data['restricao'] . '</td>';
                        echo '<td class="expandable">' . $user_data['ocasiaoespecial'] . '</td>';
                        echo '<td class="expandable">' . $dataFormatada . '</td>';
                        echo '<td class="expandable">' . $user_data['mesa'] . '</td>';
                        echo '<td class="expandable">' . $user_data['periodo'] . '</td>';
                        echo '<td class="expandable">' . $user_data['disponibilidade'] . '</td>';
                        echo "<td>
                            <a class='pencil' href='edit.php?id=$user_data[id]'>
                            <svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 512 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 4B8r3B4p7yhRXuBWLqsQ546WR43cqQwrbXMDFnBi6vSJBeif8tPW85a7r7DM961Jvk4hdryZoByEp8GC8HzsqJpRN4FxGM93l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-4B8r3B4p7yhRXuBWLqsQ546WR43cqQwrbXMDFnBi6vSJBeif8tPW85a7r7DM961Jvk4hdryZoByEp8GC8HzsqJpRN4FxGM9 16.4 0 22.6z'/></svg>
                            </a>

                            <a class='confirmed' href='statusreserva.php?id=$user_data[id]'>
                            <i class='fa-solid fa-clipboard-check'></i>
                            </a>

                            <a class='delete' href='delete.php?id=$user_data[id]'>
                            <svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 448 512'><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z'/></svg>
                            </a>
                        </td>";
                    echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        </div> 
        </div>

    </main>

    <div class="relatorio">
        <h2>Relatório de registros</h2>
        <p>Clique <a href="relatorio.php">aqui</a> para baixar o relatório de registro diário.</p>
        <p>Clique <a href="relatorio7.php">aqui</a> para baixar o relatório de registros dos últimos 7 dias.</p>
        <p>Clique <a href="relatorio30.php">aqui</a> para baixar o relatório de registros dos últimos 30 dias.</p>
    </div>

<script>
  const cells = document.querySelectorAll('.expandable');

  cells.forEach(cell => {
    let clickCount = 0;

    cell.addEventListener('click', () => {
      clickCount++;

      if (clickCount === 1) {
        cell.classList.add('expanded'); // Adiciona a classe no primeiro clique
      } else if (clickCount === 3) {
        cell.classList.remove('expanded'); // Remove a classe no segundo clique
        clickCount = 0; // Reseta o contador
      }
    });
  });



  const confirmedIcons = document.querySelectorAll('.confirmed');

confirmedIcons.forEach(icon => {
    icon.addEventListener('click', () => {
        // Encontre a linha (tr) pai do ícone clicado
        const rowElement = icon.closest('tr');

        // Verifique se a linha já está destacada (verde)
        const isHighlighted = rowElement.querySelectorAll('.expandable.confirmed-bg').length > 0;

        if (isHighlighted) {
            // Se já estiver destacada, remova a classe "confirmed-bg" de todos os elementos <td> na linha
            rowElement.querySelectorAll('.expandable').forEach(td => {
                td.classList.remove('confirmed-bg');
            });
        } else {
            // Se não estiver destacada, adicione a classe "confirmed-bg" a todos os elementos <td> na linha
            rowElement.querySelectorAll('.expandable').forEach(td => {
                td.classList.add('confirmed-bg');
            });
        }
    });
});




        
</script>

</body>
</html>