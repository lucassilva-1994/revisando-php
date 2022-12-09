<?php
    function sacar(array $conta, float $valorASacar): array{
        if($valorASacar > $conta['saldo']){
            exibeMensagem("Você não pode sacar, saldo insuficiente.");
        } else{
            $conta['saldo'] -= $valorASacar;
        }
        return $conta;
    }

    function depositar(array $conta, float $valorADepositar):array{
        if($valorADepositar > 0){
            $conta['saldo'] += $valorADepositar;
        } else{
            exibeMensagem("Os valores dos depositos precisam ser positivos.");
        }
        return $conta;
    }

    function exibeMensagem($mensagem){
        print $mensagem. "<br/>";
    }

    $contasCorrentes = [
        '12345678911' => [
            "titular" => "Pessoa 01",
            "saldo" => 1258.85
        ],
        '98765432172' => [
            "titular" => "Pessoa 02",
            "saldo" => 1350.66
        ],
        '78945612322' => [
            "titular" => "Pessoa 03",
            "saldo" => 1458.99
        ],
        '32165498785' => [
            "titular" => "Pessoa 04",
            "saldo" => 300.78
        ]
    ];

    $contasCorrentes['78945612322'] = sacar($contasCorrentes['78945612322'],300);
    $contasCorrentes['32165498785'] = depositar($contasCorrentes['32165498785'], 900);

    foreach($contasCorrentes as $cpf => $conta){
        exibeMensagem("CPF: $cpf &nbsp; Titular: $conta[titular] &nbsp; Saldo: $conta[saldo].");
        exibeMensagem("CPF: $cpf &nbsp; Titular: {$conta['titular']} &nbsp; Saldo: {$conta['saldo']}.");
        exibeMensagem("<hr/>");
    }