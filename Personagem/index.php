<?php

require 'vendor/autoload.php';

use App\Src\SatoruGojo;
use App\Src\YujiItadori;
use App\Src\Mahito;

$gojo = new SatoruGojo();
$itadori = new YujiItadori();
$mahito = new Mahito();

echo "***Poderes de Satoru Gojo***\n";
$gojo->ataque();
$gojo->defesa();

echo "\n***Poderes de Yuji Itadori***\n";
$itadori->ataque();
$itadori->defesa();

echo "\n***Poderes de Mahito***\n";
$mahito->ataque();
$mahito->defesa();