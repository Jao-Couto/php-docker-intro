<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Classes</title>
</head>

<body>

  <?php
  // Definindo uma classe em PHP
  class Pessoa {
    // Propriedades (variáveis) da classe
    public $nome;
    public $idade;

    // Método construtor
    public function __construct($nome, $idade) {
      $this->nome = $nome;
      $this->idade = $idade;
    }

    // Método da classe
    public function apresentar() {
      return "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos.";
    }
  }

  // Criando uma instância da classe
  $pessoa1 = new Pessoa("Ana", 30);

  // Chamando o método da classe
  echo $pessoa1->apresentar();  // Saída: Olá, meu nome é Ana e tenho 30 anos.


  // Criando um objeto anônimo
  $objetoAnonimo = new stdClass;

  // Definindo propriedades no objeto
  $objetoAnonimo->nome = "João";
  $objetoAnonimo->idade = 25;

  // Acessando propriedades do objeto
  echo $objetoAnonimo->nome;  // Saída: João
  echo $objetoAnonimo->idade; // Saída: 25
  ?>

</body>

</html>