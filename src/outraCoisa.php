<?php 

function criarConta(string $cpf, string $nomeTitular , float $saldo): array{

    return[
        $cpf => [
            'titular' => $nomeTitular,
            'saldo' => $saldo,
        ]
    ];
}







//class conta {

    //public $cpfTitular;
    //public $nomeDoTitular;
    //public $saldo;
    
//}