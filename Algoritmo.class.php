<?php

include('Bairro.class.php');
include('Individuo.class.php');

class Algoritmo{

    public $populacao = [];
    public $mapa = [];

    public function gerarMapa(){

        $this->mapa[] = new Bairro([0.5, 0.5], 4);
        $this->mapa[] = new Bairro([0.5, 1.5], 2);
        $this->mapa[] = new Bairro([0.5, 2.5], 4);
        $this->mapa[] = new Bairro([0.5, 3.5], 3);
        $this->mapa[] = new Bairro([0.5, 4.5], 1);
        $this->mapa[] = new Bairro([0.5, 5.5], 3);
        $this->mapa[] = new Bairro([0.5, 6.5], 8);

        // repetir processo para todas as coordenadas...
        return $this->mapa;
    }

    public function gerarPopulacao(){

    }

    public function selecacao(){

    }
}

$alg = new Algoritmo();

var_dump($alg->gerarMapa());