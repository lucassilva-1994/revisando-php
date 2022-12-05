<?php
    $conta1 = ["titular" => "Pessoa 01","saldo" => 1200.00];
    $conta2 = ["titular" => "Pessoa 02","saldo" => 1300.00];
    $conta3 = ["titular" => "Pessoa 03","saldo" => 1250.00];
    $prefixo = "R$ ";
    $contasCorrentes = [$conta1,$conta2,$conta3];
    for ($i=0;$i<count($contasCorrentes);$i++){
        print $contasCorrentes[$i]['titular']."<br/>";
        print $prefixo.$contasCorrentes[$i]['saldo']."<hr/>";
    }