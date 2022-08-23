<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{Endereco, CPF};


$endereco = new Endereco('Petropolis', 'Um Bairro', 'minha rua', '71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius', $endereco);
