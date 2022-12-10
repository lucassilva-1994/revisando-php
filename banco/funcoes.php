<?php

                function sacar(array $conta, float $valorASacar): array
                {
                    if ($valorASacar > $conta['saldo']) {
                        exibeMensagem("Você não pode sacar, saldo insuficiente.");
                    } else {
                        $conta['saldo'] -= $valorASacar;
                    }
                    return $conta;
                }

                function depositar(array $conta, float $valorADepositar): array
                {
                    if ($valorADepositar > 0) {
                        $conta['saldo'] += $valorADepositar;
                    } else {
                        exibeMensagem("Os valores dos depositos precisam ser positivos.");
                    }
                    return $conta;
                }

                function exibeMensagem($mensagem)
                {
                    print $mensagem . "<br/>";
                }
