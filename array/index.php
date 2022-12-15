<?php
    $notas = [
        "aluno" => "Alice",
        "nota" => 8
    ];

    //Usando o extract todas as chaves do array se torna uma váriavel
    extract($notas);
    print "<pre>";
    var_dump($aluno,$nota);
    print "</pre>";