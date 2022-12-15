<?php

$alunos2021 = [
    "Ana",
    "Maria",
    "José",
    "Pedro",
    "Lorrane"
];

$novosalunos = [
    "Felipe",
    "Marcelo",
    "Larissa",
    "Vitória",
    "Alice"
];

$alunos2022 = array_merge($alunos2021, $novosalunos);
print "<pre>";
var_dump($alunos2022);
print "</pre>";
