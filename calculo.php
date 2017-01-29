<?php 

require 'vendor/autoload.php';


$hello_cmd = new Commando\Command();

$hello_cmd->option('n')
    ->aka('numero')
    ->describedAs('Quando informado, calcula a soma da quantidade de caracteres por extenso de cada um dos numeros em sequencia de 1 até o número informado (Suporta apenas números até 1000) ')
    ->must(function($numero) {
    	
    	$numero = intval( $numero );

    	$res = $numero > 0 && $numero <= 1000;

    	if( !$res ){
    		throw new Exception("Informe um número válido \n Exemplo: php composer calcula -- --numero 22 \n ", 1 );
    	}

    	return $res;
    });



echo "\n\n";

$numero = $hello_cmd['numero'];

$extenso = new DojoCE\NumeroParaExtenso();

$somaCaracteresNumeros = 0;

for( $i = 1; $i <= $numero; $i++ ) {
	$ext = $extenso->converterParaExtenso( $i );

	$somaCaracteresNumeros += strlen( $ext );

	echo "\n" . str_pad( $ext, 35, " " ) . str_pad( strlen( $ext ), 10, " " ) . $somaCaracteresNumeros;
}

echo "\n\nResultado da soma: " . $somaCaracteresNumeros;

echo "\n\n";

