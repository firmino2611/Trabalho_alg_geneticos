<?php

include('Bairro.class.php');
include('Individuo.class.php');

class Algoritmo{

    public $probCruzamento = 0.90;
    public $probMutacao = 0.10;
    public $populacao = [];
    public $mapa = [];
    public $numGeracoes = 5;
    public $numIndividuos = 50;

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
    
    public function elitismo($individuos, $quantidade){
        $maior = 0;
        for($i = 0; $i < count($individuos); $i++){
            for($j = 1; $j < count($individuos) - 1; $j++)){
                if($individuos[$i]->aptidao > $individuos[$j]->aptidao){
                    $aux = $individuos[$i];
                    $individuos[$i] = $individuos[$j];
                    $individuos[$j] = $aux;
                }
            }     
        }
        $i = 0;
       while($i < $quantidade){
           $selecionados[] = $individuo[$i];
           $i++
       }
        
        return $selecionados;
    }

        /*
    *   Realiza o cruzamento do individuo com outro, recebe o segundo individuo como parametro
    *   @atributo $pai2 Individuo
    */ 
    public function cruzamento($pai1, $pai2){
        $alfa = 0.5;
        $beta = rand(0, 150)/100;
        $beta = (rand(0, 1) == 0) ? $beta* -1 : $beta;
         
        $x = round($pai1->coordenadas[0] - $beta * ($pai2->coordenadas[0] - $pai1->coordenadas[0]), 2);

        $beta = rand(0, 150)/100;
        $beta = (rand(0, 1) == 0) ? $beta* -1 : $beta;

        $y = round($pai1->coordenadas[1] - $beta * ($pai2->coordenadas[1] - $pai1->coordenadas[1]), 2);

        return new Individuo([$x, $y], $this->mapa);
    }
}

$alg = new Algoritmo();
$alg->gerarMapa();
$alg->gerarPopulacao();

// var_dump($alg->gerarPopulacao());
// echo "<br><br>";
// var_dump($alg->selecao());

for($i = 0; $i < $alg->numGeracoes; $i++){
    $populacaoIntermediaria = [];
    // Seleciona os dois melhores da população e coloca na proxima geração
    $populacaoIntermediaria = $alg->elitismo($alg->populacao, 2);
    
    for($j = 0; $j < $alg->numIndividuos - 2; $j++){
        $pai1 = $alg->selecao();
        $pai2 = $alg->selecao();

        $rand = rand(0, 100)/100;
        if($rand < $alg->probCruzamento){
            $filho = $alg->cruzamento($pai1, $pai2);
        }    
        $populacaoIntermediaria[] = $pai1;
    }

    echo "<br><br>";
    var_dump($alg->populacao);

    $alg->populacao = $populacaoIntermediaria;

    echo "<br><br>";
    var_dump($alg->populacao);
}

echo "<br><br>";
var_dump($alg->melhorIndividuo($alg->populacao));



