<?php
    $conta1 = ["titular" => "Pessoa 01","saldo" => 1200.91];
    $conta2 = ["titular" => "Pessoa 02","saldo" => 1300.09];
    $conta3 = ["titular" => "Pessoa 03","saldo" => 1250.56];
    $conta4 = ["titular" => "Pessoa 04","saldo" => 1500.01];
    $prefixo = "R$ ";
    $contasCorrentes = [$conta1,$conta2,$conta3,$conta4];
    foreach($contasCorrentes as $conta){
        print $conta["titular"]."<br/>";
        print $prefixo.$conta["saldo"]."<hr/>";
    }