<?php

include('Bairro.class.php');
include('Individuo.class.php');

class Algoritmo{

    public $probCruzamento = 0.90;
    public $probMutacao = 0.10;
    public $populacao = [];
    public $mapa = [];
    public $numGeracoes = 10;
    public $numIndividuos = 4;

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
            $x = rand(0, 800) / 100;
            $y = rand(0, 700) / 100; 

            $this->populacao[] = new Individuo([$x, $y], $this->mapa);
        }
        return $this->populacao;
    }

    public function selecao(){
        $selecionados = [];

        for($i = 0; $i < 3; $i++){
            $rand = rand(0, $this->numIndividuos-1);
            $this->populacao[$rand]->index = $rand;
            $selecionados[] = $this->populacao[$rand];
        }
        
        return $this->melhorIndividuo($selecionados);
    }

    public function melhorIndividuo($individuos){
        $melhor = $individuos[0];
        for($i = 0; $i < count($individuos); $i++){
            if($individuos[$i]->aptidao < $melhor->aptidao){
                $melhor = $individuos[$i];
            }
        }
        return $melhor;
    }

        /*
    *   Realiza o cruzamento do individuo com outro, recebe o segundo individuo como parametro
    *   @atributo $pai2 Individuo
    */ 
    public function cruzamento($pai1, $pai2){
        
    }
}

$alg = new Algoritmo();
$alg->gerarMapa();
$alg->gerarPopulacao();
// var_dump($alg->gerarPopulacao());
// echo "<br><br>";
// var_dump($alg->selecao());

for($i = 0; $i < $alg->numGeracoes; $i++){

    if(rand(0, 10)/10 < $alg->probCruzamento){
        $pai1 = $alg->selecao();
        $pai2 = $alg->selecao();

        $filho = $alg->cruzamento($pai1, $pai2);
    }
    
}


