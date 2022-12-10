<?php
        require_once 'funcoes.php';

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

        titularComLetraMaiscula($contasCorrentes['32165498785']);
        foreach($contasCorrentes as $cpf => $conta){
            ['titular' => $titular, 'saldo' => $saldo] = $conta;
            exibeMensagem("CPF: $cpf &nbsp; Titular: $titular &nbsp; Saldo: $saldo.");
            exibeMensagem("CPF: $cpf &nbsp; Titular: {$titular} &nbsp; Saldo: {$saldo}.");
            exibeMensagem("<hr/>");
        }