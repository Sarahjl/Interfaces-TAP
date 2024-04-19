<?php

require 'vendor/autoload.php';

use App\Src\MensageiroFactory;


$email = MensageiroFactory::criar('email');
$whatsapp = MensageiroFactory::criar('whatsapp');
$sms = MensageiroFactory::criar('sms');

$email->enviar("Olá, Sarah");
$whatsapp->enviar("Olá, Sarah Jandozza");
$sms->enviar("Olá, Sarah Jandozza Laurindo");