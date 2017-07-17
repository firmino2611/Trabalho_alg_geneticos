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

    /*
    *   Metodo constructor, para inicialiar um individuo
    *   @atributos $coordenadas array
    *   @atributos $aptidao double
    */
    public function __construct($coordenadas, $aptidao){
        $this->coordenadas = $coordenadas;
        $this->aptidao = $aptidao;
    }

    /*
    *   Calcula a aptidao do individuo
    *   @retorno $aptidao double
    */ 
    public function aptidao(){
        return void;
    }
    /*
    *   Realiza o cruzamento do individuo com outro, recebe o segundo individuo como parametro
    *   @atributo $pai2 Individuo
    */ 
    public function cruzamento($pai2){

    }
    /*
    *   Calcula a aptidao do individuo
    */ 
    public function mutacao(){

    }
}