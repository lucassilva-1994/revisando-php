<?php

$notas = [
    "Ana" => 9.5,
    "João" => 8.7,
    "Maria" => 7.6,
    "Pedro" => 7.5,
    "Larissa" => 6.4,
    "Lorrane" => 10
];

arsort($notas);
print "<pre>";
var_dump($notas);
print "</pre>";

print "Quem tirou nota 10?<br/>";
print array_search(10, $notas);
