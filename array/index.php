<?php
    $array = [
        1 => "Um",
        2 => "Dois",
        3 => "Três",
        4 => "Quatro"
    ];

    foreach($array as $chave => $valor){
        print "$chave -> $valor <br/>";
    }

    print "Quantidade de indices: " .count($array);