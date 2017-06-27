<?php
    // array de numeros aleatorios dados no exercicio
    define('NUM_ALEATORIOS', [0.863, 0.193, 0.606, 0.675, 0.508, 0.426, 0.324, 0.558]);
    define('NUM_INDIVIDUOS', 8);
    define('NUM_CROMOSSOMOS', 18);
    define('MIN_FUNCAO', -2.8);
    define('MAX_FUNCAO', 2.6);
    define('NUM_GERACOES', 10);

    function binarioToDecimal($bin){
        $total  = 0;
        $potenc = 1;

        while($bin > 0) {
            $total += $bin % 10 * $potenc;
            $bin    = $bin / 10;
            $potenc = $potenc * 2;
        }

        return $total;
    }
    function inicializaPopulacao(){
        $populacao = [];
        for($i = 0; $i < NUM_INDIVIDUOS; $i++){
            $individuo = [];
            for($j = 0; $j < NUM_CROMOSSOMOS; $j++){
                $individuo[] = rand(0, 1);
            }
            $obj = [
                'individuo' => $individuo,
                'aptidao' => 0,
                'aptidaoAcumulada' => 0,
                'valorDecimal' => 0
            ];
            $populacao[] = $obj;
        }
        return $populacao;
    }

     // calcula a aptidao acumulada dos individuos da geracao
    function aptidaoAcumulada($populacao){
        $populacao[0]['aptidaoAcumulada'] = $populacao[0]['aptidao'];
        
        for($i = 0; $i < count($populacao) - 1; $i++){
            $populacao[$i+1]['aptidaoAcumulada'] = $populacao[$i]['aptidaoAcumulada'] + $populacao[$i+1]['aptidao'];
        }

        return $populacao;
    }

    // calcula a apitidao de toda a geracao e retorna a populacao ordenada
    function aptidao($populacao){
      
        for($i = 0; $i < count($populacao); $i++){
            // calculo para converter o valor dentro do intervalo
            $valorInterno = MIN_FUNCAO + ( MAX_FUNCAO - MIN_FUNCAO ) * ( binarioToDecimal( implode('', $populacao[$i]['individuo']) ) / ( pow(2, NUM_CROMOSSOMOS ) - 1 ) );

            // calculo da funcao matematica f(x)
            $fx = (-1 * pow($valorInterno, 6)) + (7 * (pow($valorInterno, 4))) - ( 4 * pow($valorInterno, 3)) + (20 * $valorInterno) + 30;

            $populacao[$i]['valorInterno'] = $valorInterno;
            $populacao[$i]['aptidao'] = number_format($fx, 2);
        }
        
        $maior = $populacao[0];

        // faz a ordenacao da populacao 
        for($i = 0; $i < count($populacao); $i++){
            for($j = 0; $j < count($populacao); $j++){
                if($populacao[$i]['aptidao'] > $populacao[$j]['aptidao'] ){
                    $maior = $populacao[$i];
                    $populacao[$i] = $populacao[$j];
                    $populacao[$j] = $maior;
                }
            }
        }

        return aptidaoAcumulada($populacao);
    }

    function selecao($populacao){
        $objSelecionado;
        $populacaoIntermediaria = [];
        
        // selecao dos pais para populacao intermediaria
        // gera um valor aleatorio para pegar um objeto
        $random = rand($populacao[0]['aptidaoAcumulada'], $populacao[NUM_INDIVIDUOS - 1]['aptidaoAcumulada']);
        $t = $random;
         // selecionada o objeto de acordo com o valor da aptidao acumulada e o valor gerado anteriormente
        for($i = 2; $i < count($populacao); $i++){
            if($populacao[$i]['aptidaoAcumulada'] >= $random){
                $objSelecionado = $populacao[$i];
                break;
            }
        }

        for($k = 0; $k < NUM_INDIVIDUOS; $k++){
            $aux = $objSelecionado['aptidaoAcumulada'] * rand(0, 100)/100;
            // adiciona os elementos para o populacao intermediaria e exclui eles da populacao original, deixando apensa os dois melhores na populacao original
            for($j = 0; $j < count($populacao); $j++){
                if($populacao[$j]['aptidaoAcumulada'] >= $aux){
                    $populacaoIntermediaria[] = $populacao[$j];
                    break;
                }
            } 
        }

        return [
                'populacao' => array_slice($populacao, 0, 2), // pega so os dois primeiros individuos da populacao
                'populacaoIntermediaria' => $populacaoIntermediaria,
                'random' => $t
        ];
      
    }
    // mandar apensa o individuo $populacao[x]['individuo']
    function cruzamento($pai1, $pai2){
        // escolhe um ponto aleatoriamente no intervalo [0, NUM_CROMOSSOMOS - 1]
        $ponto = rand(0, (NUM_CROMOSSOMOS - 1));

        $filhos[] = array_merge(array_slice($pai1, 0, $ponto), array_slice($pai2, $ponto, NUM_CROMOSSOMOS));
        $filhos[] = array_merge(array_slice($pai2, 0, $ponto), array_slice($pai1, $ponto, NUM_CROMOSSOMOS));

        // [0,1,1,0] retorna apenas os arrays que devera ser inserido na populacao
        return $filhos;
    }

    function mutacao($populacao){
        $numIndividuos = rand(2, 3);// sorteia o numero de individuos que sofreram mutacao
        
        for($j = 0; $j <= $numIndividuos; $j++){
            $rand[] = rand(0, $numIndividuos); // pega um valor aleatorio para selecionar um indivudo da populacao
            $objSelecionados[] = $populacao[$rand[$j]]; // seleciona o individuo na posicao aleatoria gerada anteriormente
        }

        for($i = 0; $i <= $numIndividuos; $i++){
            $numCromossomos = rand(1, 3); // seleciona um valor aleatorio de cromossomos para ser alterados no individuo

            for($k = 0; $k < $numCromossomos; $k++){
                $r = rand(0, NUM_CROMOSSOMOS - 1);
 
                if($objSelecionados[$i]['individuo'][$r] == 1)
                    $objSelecionados[$i]['individuo'][$r] = 0;
                else
                    $objSelecionados[$i]['individuo'][$r] = 1;
            }
            
        }

        for($x = 0; $x < count($rand); $x++){
            $populacao[$rand[$x]] = $objSelecionados[$rand[$x]];
        }

        return $populacao;
    }
    

    // inicializa  a populacao
    $populacao = inicializaPopulacao();
    // calcula a aptidao e aptidao acumulada de todos individuos da populacao e ordena pela aptidao
    $populacao = aptidao($populacao);

    $populacaoAtual[] = $populacao;

    for($i = 0; $i < NUM_GERACOES; $i++){

        $selecao = selecao($populacao);
        $populacaoIntermediaria = $selecao['populacaoIntermediaria'];
        $populacao = $selecao['populacao'];
        $random[] = $selecao['random'];

        for($j = 0; $j < count($populacaoIntermediaria); $j += 2){
            $probCruzamento = rand(0, 100) / 100;
            
            if($probCruzamento < 0.9){
            
                $filhos = cruzamento($populacaoIntermediaria[$j]['individuo'], $populacaoIntermediaria[$j+1]['individuo']);

                $populacao[] = [
                        'individuo' => $filhos[0],
                        'aptidao' => 0,
                        'aptidaoAcumulada' => 0
                ];
                $populacao[] =  [
                        'individuo' => $filhos[1],
                        'aptidao' => 0,
                        'aptidaoAcumulada' => 0
                ];
            }else{
                $populacao[] = $populacaoIntermediaria[$j];
                $populacao[] = $populacaoIntermediaria[$j+1];
            }
        }

        $populacao = mutacao($populacao);
        $populacao = aptidao($populacao);
        $populacaoAtual[] = $populacao;
    }

?>
<!DOCTYPE html>
  <html ng-app="app">
    <head>
        <meta charset="utf8"> 
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body ng-controller="appController as ctrl" class="container">
        <a href="" class="btn" onclick="window.print()">imprimir</a>
        <!--<div class="row">
            <div class="col l8 offset-l2" style="padding: 100px 0px">
				<form action="executa/algoritmo" method="get">
					<div class="row">
						<h4>Intervalo da funcao</h4>
						<div class="input-field col m6">
							<input ng-model="ctrl.funcao.minFuncao" id="last_name" name="min" type="number" class="validate">
							<label for="last_name">Mínimo</label>
						</div>
						<div class="input-field col m6">
							<input ng-model="ctrl.funcao.maxFuncao" id="last_name" name="max" type="number" class="validate">
							<label for="last_name">Máximo</label>
						</div>
					</div>
					<div class="row">
						<h4>Informacoes adicionais</h4>
						<div class="input-field col m4">
							<input ng-model="ctrl.alg.numGeracoes" id="last_name" name="numeroGeracoes" type="number" class="validate">
							<label for="last_name">Numero de geracoes</label>
						</div>
						<div class="input-field col m4">
							<input ng-model="ctrl.alg.numIndividuos" min="2" id="last_name" name="numeroIndividuos" type="number" class="validate">
							<label for="last_name">Numero de individuos</label>
						</div>
						<div class="input-field col m4">
							<input ng-model="ctrl.alg.numCromossomos" id="last_name" name="numeroCromossomos" type="number" class="validate">
							<label for="last_name">Numero de cromosomos</label>
						</div>
					</div>

					<button ng-click="ctrl.executaAlgoritmo()" class="btn" type="">gerar</button>
				</form>
            </div>
            </div>
        </div>-->
           <?php $i = 0; ?>
        
            <?php foreach($populacaoAtual as $populacao): ?>
                
            <div class="row">
                <h4>Geracao <?php echo $i; ?></h4>
                <h5>Valor sorteado para selecao: <?php echo $random[$i]; ?></h5>
                <table class="bordered">
                    <thead>
                        <tr>
                            <th>Individuo</th>
                            <th>x</th>
                            <th>f(x)</th>
                            <th>Aptidao Acumulada</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($populacao as $individuo): ?>
                            <tr >
                                <td><?php echo implode(',', $individuo['individuo']);  ?></td>
                                <td><?php echo $individuo['valorInterno'];  ?></td>
                                <td><?php echo $individuo['aptidao'];  ?></td>
                                <td><?php echo $individuo['aptidaoAcumulada'];  ?></td>
                            </tr>
                        <?php endforeach; ?>
                        
                    </tbody>
                </table>
            </div>
            <?php $i++; ?>
            <?php endforeach; ?>
        

        <!--Import jQuery before materialize.js-->
         <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
          <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script>
            function open(){
                windon.print()
            }
        </script>
        
    </body>
  </html>
