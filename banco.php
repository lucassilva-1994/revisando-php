<?php
    function exibeMensagem($mensagem){
        print $mensagem. "<br/>";
    }

    $contasCorrentes = [
        12345678911 => [
            "titular" => "Pessoa 01",
            "saldo" => 1258.85
        ],
        98765432172 => [
            "titular" => "Pessoa 02",
            "saldo" => 1350.66
        ],
        78945612322 => [
            "titular" => "Pessoa 03",
            "saldo" => 1458.99
        ],
        32165498785 => [
            "titular" => "Pessoa 04",
            "saldo" => 300.78
        ]
    ];

    foreach($contasCorrentes as $cpf => $conta){
        exibeMensagem($cpf ." ----- ".$conta['titular']);
    }