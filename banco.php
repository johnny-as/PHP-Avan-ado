<?php

/*  - include 'funcoes.php' não dá erro se o nome do arquivo estiver errado
    - require 'funcoes.php' indica o erro acima, mas gera problema ao duplicar a mesma require
*/

require_once 'funcoes.php';// - require_once 'funcoes.php' previne todos os erros acima

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Johnny',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.256.789-12' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];


$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'],500);
$contasCorrentes['123.256.789-12'] = sacar($contasCorrentes['123.256.789-12'],200);

$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'],900);

unset($contasCorrentes['123.456.789-11']);//exclui a variavel da lista

titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);

/*foreach($contasCorrentes as $cpf => $conta){
    //list('titular' => $titular, 'saldo' => $saldo) = $conta;
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem("$cpf $titular $saldo");
}
*/

/*foreach($contasCorrentes as $cpf => $conta){
    exibeConta($conta);
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas Correntes</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta){ ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?> </h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dt>
</body>
</html>