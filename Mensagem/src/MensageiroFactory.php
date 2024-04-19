<?php

namespace App\Src;

class MensageiroFactory{
    public static function criar($tipo): Mensageiro {
        switch ($tipo) {
            case 'email':
                return new Email();
            case 'sms':
                return new Sms();
            case 'whatsapp':
                return new Whatsapp();
            default:
                return "Tipo de mensagem inválida";
        }
    } 
}