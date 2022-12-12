<?php
    $notas = [
        [ "aluno" => "Alice", "nota" => 8],
        ["aluno" => "Fabiano", "nota" => 7.5],
        ["aluno" => "Rafaela","nota" => 9],
        ["aluno" => "Lorena", "nota" => 6]
    ];

    function ordenaNotas(array $nota1, array $nota2): int{
        return $nota2['nota'] <=> $nota1['nota'];
    }

    usort($notas, 'ordenaNotas');
    print "<pre>";
    var_dump($notas);
    print "</pre>";