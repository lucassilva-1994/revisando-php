<?php
    $notas = [
        [ "aluno" => "Alice", "nota" => 8],
        ["aluno" => "Fabiano", "nota" => 7.5],
        ["aluno" => "Rafaela","nota" => 9],
        ["aluno" => "Lorena", "nota" => 6]
    ];

    foreach($notas as ["aluno"=> $aluno, "nota" => $nota]){
        print "Aluno: $aluno &nbsp; Nota: $nota <br/>";
    }