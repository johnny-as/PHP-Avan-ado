<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Johnny',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    12325678910 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

/*foreach($contasCorrentes as $conta){
    echo $conta['titular'] . PHP_EOL;
}*/
$contasCorrentes[12345637811] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach($contasCorrentes as $cpf => $conta){
    echo $conta['titular'] . PHP_EOL;
}