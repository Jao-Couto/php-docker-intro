<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variáveis</title>
</head>

<body>

  <?php

  $nome = "João";
  $idade = 25;
  $salario = 1500.50;
  $estaChovendo = true;
  print "Nome: " . $nome;

  $cores = ["vermelho", "verde", "azul"];
  ?>
  <pre>
  <?php
  var_dump($cores);
  ?>
  </pre>

  <?php
  echo "<pre>";
  print_r($cores);
  echo "</pre>";
  echo $cores[0];

  array_push($cores, "rosa"); // Adiciona ao final do array
  echo "<pre>";
  var_dump($cores);
  echo "</pre>";

  $ultimaCor = array_pop($cores); // Remove último e retorna o valor removido
  echo $ultimaCor;
  echo "<pre>";
  var_dump($cores);
  echo "</pre>";

  $primeiraCor = array_shift($cores); // Remove primeiro e retorna o valor removido
  echo $primeiraCor;
  echo "<pre>";
  var_dump($cores);
  echo "</pre>";


  $frutas = [123, true, 23.1];
  $coresFrutas = array_merge($cores, $frutas); // Cria um novo array com toda
  echo "<pre>";
  var_dump($coresFrutas);
  echo "</pre>";


  $numeros = [1, 2, 3, 4, 5];
  $pares = array_filter($numeros, function ($numero) {
    return $numero % 2 == 0;
  }); // Retorna um array com os números pares (2 e 4)
  echo "<pre>";
  var_dump($pares);
  echo "</pre>";

  $nomes = ["Maria", "João", "Carlos"];
  sort($nomes); // Ordena em ordem alfabética
  echo "<pre>";
  var_dump($nomes);
  echo "</pre>";

  // ou
  $nomes = ["Maria", "João", "Carlos"];
  asort($nomes); // Ordena preservando as chaves associativas
  echo "<pre>";
  var_dump($nomes);
  echo "</pre>";


  $frutas = ["maçã", "banana", "laranja"];
  $frutasInvertidas = array_reverse($frutas); // Inverte a ordem dos elementos
  echo "<pre>";
  var_dump($frutasInvertidas);
  echo "</pre>";

  $frutas = ["maçã", "banana", "laranja"];
  $existeLaranja = in_array("laranja", $frutas); // Retorna true se "laranja" existe no array
  echo $existeLaranja;

  $frutas = ["maçã", "banana", "laranja"];
  $quantidade = count($frutas);
  echo $quantidade;



  $pessoas = [
    "Alice" => 25,
    "Bob" => 30,
    "Carol" => 28
  ];
  // Acessando valores por chaves
  echo $pessoas["Alice"];
  echo "<pre>";
  var_dump($pessoas);
  echo "</pre>";

  $pessoa = ["nome" => "João", "idade" => 25];
  $pessoa["cidade"] = "São Paulo"; // Adiciona a chave "cidade" ao dicionário

  $pessoa = ["nome" => "João", "idade" => 25, "cidade" => "São Paulo"];
  unset($pessoa["idade"]); // Remove a chave "idade" do dicionário
  echo "<pre>";
  var_dump($pessoa);
  echo "</pre>";

  $pessoa = ["nome" => "João", "idade" => 25, "cidade" => "São Paulo"];
  $existeIdade = array_key_exists("idade", $pessoa); // Retorna true se "idade" existe
  echo $existeIdade;


  $pessoa = ["nome" => "João", "idade" => 25, "cidade" => "São Paulo"];
  $chaves = array_keys($pessoa); // Retorna um array com as chaves ("nome", "idade", "cidade")
  echo "<pre>";
  var_dump($chaves);
  echo "</pre>";

  $pessoa = ["nome" => "João", "idade" => 25, "cidade" => "São Paulo"];
  $valores = array_values($pessoa); // Retorna um array com os valores ("João", 25, "São Paulo")
  echo "<pre>";
  var_dump($valores);
  echo "</pre>";

  $pessoa = ["nome" => "João", "idade" => 25, "cidade" => "São Paulo"];
  $pessoaFiltrada = array_filter($pessoa, function ($valor, $chave) {
    echo $chave;
    return $valor != "São Paulo";
  }, ARRAY_FILTER_USE_BOTH); // ARRAY_FILTER_USE_KEY
  echo "<pre>";
  var_dump($pessoaFiltrada);
  echo "</pre>";

  $pessoa = ["nome" => "João", "idade" => 25, "cidade" => "São Paulo"];
  $quantidade = count($pessoa); // Retorna 3 (número de pares chave-valor)
  echo $quantidade;
  ?>

</body>

</html>