<?php
  $conexao = mysqli_connect("localhost", "id11007692_pedro", "110403", "id11007692_pizzaria" );
  //                        Local do Banco, Nome do Usuário,    Senha do BD  Nome do BD

$query = "SELECT * FROM Pizza order by ds_sabor";

$result = mysqli_query($conexao,$query);

$registro = array(
  'pizzas'=>array()
);

$i = 0;

while($linha = mysqli_fetch_assoc($result)){
  $registro['pizzas'][$i] = array(
           'codigo' => $linha['id_pizza'],
           'sabor' => $linha['ds_sabor'],
           'valor' => $linha['vl_pizza']

  );
  $i++;
}


echo json_encode($registro);
 ?>
