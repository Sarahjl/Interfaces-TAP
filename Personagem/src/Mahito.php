<?php

namespace App\Src;

class Mahito implements Personagem{

    public function ataque(){
        echo "Ataque: Mahito ataca com suas marionetes feita através da técnica 'Transfiguração Ociosa'\n";
    }

    public function defesa(){
        echo "Defesa: Mahito se defende usando a técnica de defesa 'Personificação da Perfeição'\n";
    }
}