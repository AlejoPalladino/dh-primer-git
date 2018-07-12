<?php
$connect = mysqli_connect("localhost:8889", "root", "root", "UserSql");
$filename = "usuario.json";
$data = file_get_contents($filename);
$array = json_decode($data, true);


for ($i=0; $i < count($array["usuarios"]); $i++) {
  $array2 = $array["usuarios"];
  $arrayFinal = $array2[$i];
  $data2 = json_decode($arrayFinal, true);
  var_dump($data2["nombre"]);

  $sql = "INSERT INTO user_table("nombre", "email", "usuario", "password") VALUES({$data2['nombre']}, {$data2['email']}, {$data2['usuario']}, {$data2['password']})";
  mysqli_query($connect, $sql);
}
exit;



 ?>
