<?php

$notas = [
    "Ana" => 9.5,
    "João" => 8.7,
    "Maria" => 5,
    "Pedro" => 7.5,
    "Larissa" => 6.4
];

ksort($notas);
print "<pre>";
var_dump($notas);
print "</pre>";