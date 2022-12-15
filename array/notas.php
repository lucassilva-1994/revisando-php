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

$alunos2022 = [...$alunos2021, "Lucas Sílva",...$novosalunos];
//Adicionando elementos no final da lista
array_push($alunos2022, "Antônio", "Leonardo", "Geslaine", "Claúdia");
//Outra maneira de adicionar elementos no final da lista
$alunos2022[] = "Leonardo";
//Adicionando elementos no inicio da lista
array_unshift($alunos2022, "Stephanie", "Rafaela");


//Removendo primeiro elemento da lista
array_shift($alunos2022);
//Removendo último elemento da lista
array_pop($alunos2022);

print "<pre>";
var_dump($alunos2022);
print "</pre>";
