<?php
  $conexao = mysqli_connect("localhost", "id11007692_pedro", "110403", "id11007692_pizzaria" );
  //                        Local do Banco, Nome do Usuário,    Senha do BD  Nome do BD


$codigo = $_POST['codigo'];

$query = "SELECT * FROM Pizza WHERE id_pizza = $codigo";

$result = mysqli_query($conexao,$query);




while($linha = mysqli_fetch_assoc($result)){
  $registro = array(

           'pizza'=>array(
           'codigo' => $linha['id_pizza'],
           'sabor' => $linha['ds_sabor'],
           'valor' => $linha['vl_pizza']
       )
    );
}


echo json_encode($registro);
 ?>
