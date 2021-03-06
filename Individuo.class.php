<?php

/*
*   Classe que represata os individuos da populacao
*   @atributo $coordenadas array
*   @atributo $aptiodao double
*/

class Individuo {
    // Representa as coordenadas x, y no plano cartesiano
    public $coordenadas = [0,0];
    // Aptidao do individuo
    public $aptidao = 0;
    // posicao do individuo dentro da populacao
    // public $index;

    /*
    *   Metodo constructor, para inicialiar um individuo
    *   @atributos $coordenadas array
    *   @atributos $aptidao double
    */
    public function __construct($coordenadas, $mapa){
        $this->coordenadas = $coordenadas;
        $this->aptidao = $this->aptidao($mapa);
    }

    /*
    *   Calcula a aptidao do individuo
    *   @retorno $aptidao double
    */ 
    public function aptidao($mapa){

        foreach($mapa as $bairro){
            $this->aptidao += $bairro->frequencia * ( sqrt( (pow($bairro->coordenadas[0] - $this->coordenadas[0], 2) ) + ( pow($bairro->coordenadas[1] - $this->coordenadas[1], 2) ) ) );
        }
        return round($this->aptidao, 2);
    }
    

    /*
    *   Calcula a aptidao do individuo
    */ 
    public function mutacao(){

    }
}