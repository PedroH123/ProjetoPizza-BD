<?php

  $conexao = mysqli_connect("localhost", "id11007692_pedro", "110403", "id11007692_pizzaria" );
  //                        Local do Banco, Nome do Usuário,    Senha do BD  Nome do BD
  $saborPizza = $_POST['saborPizza'];
  $valorPizza = $_POST['valorPizza'];
  $query = "insert into Pizza values (null, '$saborPizza', $valorPizza)";
  mysqli_query($conexao, $query);
  echo 'Registro Feito';


 ?>
