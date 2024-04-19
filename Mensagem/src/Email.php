<?php

namespace App\Src;

class Email implements Mensageiro{
    
    function enviar(string $mensagem){
        echo "Mensagem enviada por Email: {$mensagem}\n";
    }
}