<?php
include 'connect_database.php';


if (isset($_POST['add_cliente'])) {
  $nome = $_POST['nomeCliente'];
  $telefone = $_POST['telefoneCliente'];
  $observ = $_POST['observacaoCliente'];

  if ($nome == "" || empty($nome)) {
    echo "failed";
  } else {
    $query = "insert into `cliente` (`id_cliente`, `obeservacao`, `cliente_telefone_id_cliente_telefone	
                        `) values ('$nome', '$telefone', '$observ')";

    $result = mysqli_query($connection, $query);
    if (!$result) {
      die('query failed' . mysqli_error());
    }
  }
}
