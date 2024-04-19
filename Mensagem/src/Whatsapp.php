<?php

namespace App\Src;

class Whatsapp implements Mensageiro{
    
    public function enviar(string $mensagem){
        echo "Mensagem enviada por Whatsapp: {$mensagem}\n";
    }
}