<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funções</title>
</head>

<body>

  <?php


  // Definindo uma função simples
  function saudacao($nome) {
    return "Olá, " . $nome . "!";
  }

  // Chamando a função
  $resultado = saudacao("Maria");
  echo $resultado;  // Saída: Olá, Maria!


  function somar(int $a, int $b) {
    return $a + $b;
  }

  $resultado = somar(5, 3); // Funciona bem
  $resultado = somar("5", "3"); // Erro: Argumentos devem ser int

  ?>

</body>

</html>