<?php

namespace App\Src;

class YujiItadori implements Personagem{

    public function ataque(){
        echo "Ataque: Yuji Itadori prepara sua energia amaldiçoada para atacar com a técnica 'Black Flash'\n";
    }

    public function defesa(){
        echo "Defesa: Yuji Itadori aumenta sua resistência com energia amaldiçoada para se defender\n";
    }
}