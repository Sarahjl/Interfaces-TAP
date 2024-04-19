<?php

namespace App\Src;

class Sms implements Mensageiro{
    
    public function enviar(string $mensagem){
        echo "Mensagem enviada por SMS: {$mensagem}\n";
    }
}