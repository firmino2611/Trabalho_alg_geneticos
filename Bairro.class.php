<?php
/*
*   Classe que represata os bairro do mapa
*   @atributo $coordenadas array
*   @atributo $frequencia int
*/
class Bairro{
    // Representa as coordenadas x, y no plano cartesiano
    public $coordenadas = [0,0];
    // Frequencia de chamadas do bairro
    public $frequencia = 0;
    
    /*
    *   Metodo constructor, para inicialiar um bairro
    *   @atributos $coordenadas array
    *   @atributos $frequecia int
    */
    public function __construct($coordenadas, $frequencia){
        $this->coordenadas = $coordenadas;
        $this->frequencia = $frequencia;
    }

}