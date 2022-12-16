<?php

interface ICliente {
    public function validateName();
    public function validateAge();
}

class Cliente implements ICliente
{
 public function __construct(public string $nome, public string $endereco, public readonly int $idade) 
 {
 }

 public function validateName() {
    if ($this->nome == "iago") {
         echo "lindao\n";
    }
}
 public function validateAge() {
    if ($this->idade == 24) {
        echo "ain pai para\n";
    }
 }
}
$cliente = new Cliente("iago", "rua zap zap", 24);
$cliente->validateName();
$cliente->validateAge();
print($cliente->nome . " / " . $cliente->endereco . " / " . $cliente->idade);
