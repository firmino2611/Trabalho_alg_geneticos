<?php

include('Bairro.class.php');
include('Individuo.class.php');

class Algoritmo{

    public $populacao = [];
    public $mapa = [];
    public $numGeracoes = 10;
    public $numIndividuos = 2;

    public function gerarMapa(){

        $this->mapa[] = new Bairro([0.5, 0.5], 4);
        $this->mapa[] = new Bairro([0.5, 1.5], 2);
        $this->mapa[] = new Bairro([0.5, 2.5], 4);
        $this->mapa[] = new Bairro([0.5, 3.5], 3);
        $this->mapa[] = new Bairro([0.5, 4.5], 1);
        $this->mapa[] = new Bairro([0.5, 5.5], 3);
        $this->mapa[] = new Bairro([0.5, 6.5], 8);

        $this->mapa[] = new Bairro([1.5, 0.5], 7);
        $this->mapa[] = new Bairro([1.5, 1.5], 1);
        $this->mapa[] = new Bairro([1.5, 2.5], 3);
        $this->mapa[] = new Bairro([1.5, 3.5], 5);
        $this->mapa[] = new Bairro([1.5, 4.5], 8);
        $this->mapa[] = new Bairro([1.5, 5.5], 5);
        $this->mapa[] = new Bairro([1.5, 6.5], 4);

        $this->mapa[] = new Bairro([2.5, 0.5], 9);
        $this->mapa[] = new Bairro([2.5, 1.5], 9);
        $this->mapa[] = new Bairro([2.5, 2.5], 5);
        $this->mapa[] = new Bairro([2.5, 3.5], 8);
        $this->mapa[] = new Bairro([2.5, 4.5], 7);
        $this->mapa[] = new Bairro([2.5, 5.5], 9);
        $this->mapa[] = new Bairro([2.5, 6.5], 5);

        $this->mapa[] = new Bairro([3.5, 0.5], 3);
        $this->mapa[] = new Bairro([3.5, 1.5], 3);
        $this->mapa[] = new Bairro([3.5, 2.5], 7);
        $this->mapa[] = new Bairro([3.5, 3.5], 9);
        $this->mapa[] = new Bairro([3.5, 4.5], 8);
        $this->mapa[] = new Bairro([3.5, 5.5], 2);
        $this->mapa[] = new Bairro([3.5, 6.5], 5);

        $this->mapa[] = new Bairro([4.5, 0.5], 7);
        $this->mapa[] = new Bairro([4.5, 1.5], 7);
        $this->mapa[] = new Bairro([4.5, 2.5], 9);
        $this->mapa[] = new Bairro([4.5, 3.5], 1);
        $this->mapa[] = new Bairro([4.5, 4.5], 7);
        $this->mapa[] = new Bairro([4.5, 5.5], 1);
        $this->mapa[] = new Bairro([4.5, 6.5], 3);

        $this->mapa[] = new Bairro([5.5, 0.5], 2);
        $this->mapa[] = new Bairro([5.5, 1.5], 6);
        $this->mapa[] = new Bairro([5.5, 2.5], 3);
        $this->mapa[] = new Bairro([5.5, 3.5], 3);
        $this->mapa[] = new Bairro([5.5, 4.5], 2);
        $this->mapa[] = new Bairro([5.5, 5.5], 4);
        $this->mapa[] = new Bairro([5.5, 6.5], 2);

        $this->mapa[] = new Bairro([6.5, 0.5], 1);
        $this->mapa[] = new Bairro([6.5, 1.5], 9);
        $this->mapa[] = new Bairro([6.5, 2.5], 7);
        $this->mapa[] = new Bairro([6.5, 3.5], 4);
        $this->mapa[] = new Bairro([6.5, 4.5], 3);
        $this->mapa[] = new Bairro([6.5, 5.5], 6);
        $this->mapa[] = new Bairro([6.5, 6.5], 4);

        $this->mapa[] = new Bairro([7.5, 0.5], 8);
        $this->mapa[] = new Bairro([7.5, 1.5], 3);
        $this->mapa[] = new Bairro([7.5, 2.5], 6);
        $this->mapa[] = new Bairro([7.5, 3.5], 5);
        $this->mapa[] = new Bairro([7.5, 4.5], 8);
        $this->mapa[] = new Bairro([7.5, 5.5], 3);
        $this->mapa[] = new Bairro([7.5, 6.5], 4);

        // repetir processo para todas as coordenadas...
        return $this->mapa;
    }

    public function gerarPopulacao(){

        while($this->numIndividuos != count($this->populacao)){
            $x = rand(0, 7) + rand(0, 99)/100;
            $y = rand(0, 6) + rand(0, 99)/100;

            $this->populacao[] = new Individuo([$x, $y], $this->mapa);
        }

        return $this->populacao;
    }

    public function selecacao(){

    }

    public function melhorIndividuo(){

    }
}

$alg = new Algoritmo();
$alg->gerarMapa();

var_dump($alg->gerarPopulacao());