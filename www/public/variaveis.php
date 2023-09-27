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

  // Variáveis em PHP começam com o símbolo $
  $nome = "João";
  $idade = 25;
  $salario = 1500.50;
  $estaChovendo = true;
  // Você pode imprimir o valor de uma variável usando echo
  echo "Nome: " . $nome;  // Saída: Nome: João

  $cores = ["vermelho", "verde", "azul"];
  var_dump($cores); // Imprime Array
  print_r($cores); // Imprime Array
  // Acessando elementos do array
  echo $cores[0];  // Saída: vermelho
  echo $cores[1];  // Saída: verde
  echo $cores[2];  // Saída: azul

  array_push($cores, "rosa"); // Adiciona ao final do array
  print_r($cores); // Imprime Array

  $ultimaCor = array_pop($cores); // Remove e retorna "laranja"
  echo $ultimaCor; // Imprime laranja
  print_r($cores); // Imprime Array

  $primeiraCor = array_shift($cores); // Remove e retorna "maçã"
  echo $primeiraCor; // Imprime maçã
  print_r($cores); // Imprime Array


  $frutas = ["maçã", "banana"];
  $coresFrutas = array_merge($cores, $frutas2); // Cria um novo array com toda
  print_r($coresFrutas); // Imprime Array


  $numeros = [1, 2, 3, 4, 5];
  $pares = array_filter($numeros, function ($numero) {
    return $numero % 2 == 0;
  }); // Retorna um array com os números pares (2 e 4)
  print_r($pares); // Imprime Array

  $nomes = ["Maria", "João", "Carlos"];
  sort($nomes); // Ordena em ordem alfabética
  print_r($nomes); // Imprime Array

  // ou
  asort($nomes); // Ordena preservando as chaves associativas
  print_r($nomes); // Imprime Array


  $frutas = ["maçã", "banana", "laranja"];
  $frutasInvertidas = array_reverse($frutas); // Inverte a ordem dos elementos
  print_r($frutasInvertidas); // Imprime Array

  $frutas = ["maçã", "banana", "laranja"];
  $existeLaranja = in_array("laranja", $frutas); // Retorna true se "laranja" existe no array
  echo $existeLaranja; // Imprime 1

  $frutas = ["maçã", "banana", "laranja"];
  $quantidade = count($frutas); // Retorna 3
  echo $quantidade; // Imprime 3



  $pessoas = [
    "Alice" => 25,
    "Bob" => 30,
    "Carol" => 28
  ];
  // Acessando valores por chaves
  echo $pessoas["Alice"];  // Saída: 25
  print_r($pessoas); // Imprime Array

  $pessoa = ["nome" => "João", "idade" => 25];
  $pessoa["cidade"] = "São Paulo"; // Adiciona a chave "cidade" ao dicionário

  $pessoa = ["nome" => "João", "idade" => 25, "cidade" => "São Paulo"];
  unset($pessoa["idade"]); // Remove a chave "idade" do dicionário
  print_r($pessoa); // Imprime Array

  $pessoa = ["nome" => "João", "idade" => 25, "cidade" => "São Paulo"];
  $existeIdade = array_key_exists("idade", $pessoa); // Retorna true se "idade" existe
  echo $existeIdade; // Imprime 1


  $pessoa = ["nome" => "João", "idade" => 25, "cidade" => "São Paulo"];
  $chaves = array_keys($pessoa); // Retorna um array com as chaves ("nome", "idade", "cidade")
  print_r($chaves); // Imprime Array

  $pessoa = ["nome" => "João", "idade" => 25, "cidade" => "São Paulo"];
  $valores = array_values($pessoa); // Retorna um array com os valores ("João", 25, "São Paulo")
  print_r($valores); // Imprime Array

  $pessoa = ["nome" => "João", "idade" => 25, "cidade" => "São Paulo"];
  $pessoaFiltrada = array_filter($pessoa, function ($valor, $chave) {
    return $valor != "São Paulo";
  }, ARRAY_FILTER_USE_BOTH); // Remove a chave "cidade"
  print_r($pessoaFiltrada); // Imprime Array

  $pessoa = ["nome" => "João", "idade" => 25, "cidade" => "São Paulo"];
  $quantidade = count($pessoa); // Retorna 3 (número de pares chave-valor)
  echo $quantidade; // Imprime 3
  ?>

</body>

</html>