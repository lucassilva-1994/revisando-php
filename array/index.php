<?php
    $notas = [
        [ "aluno" => "Alice", "nota" => 8],
        ["aluno" => "Fabiano", "nota" => 7.5],
        ["aluno" => "Rafaela","nota" => 9],
        ["aluno" => "Lorena", "nota" => 6]
    ];

    function ordenaNotas(array $nota1, array $nota2): int{
        if($nota1['nota'] > $nota2['nota']){
            return -1;
        }

        if($nota2['nota'] > $nota1['nota']){
            return 1;
        }

        return 0;
    }

    usort($notas, 'ordenaNotas');
    print "<pre>";
    var_dump($notas);
    print "</pre>";