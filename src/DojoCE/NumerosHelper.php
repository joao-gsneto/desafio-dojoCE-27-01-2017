<?php 
declare(strict_types=1);

namespace DojoCE;

class NumerosHelper
{
	private $_unidades = [
		0 => '',
		1 => 'um',
		'dois',
		'tres',
		'quatro',
		'cinco',
		'seis',
		'sete',
		'oito',
		'nove'
	];


	private $_dezenas = [
	     0 => '',
		10 => 'dez',
		20 => 'vinte',
		30 => 'trinta',
		40 => 'quarenta',
		50 => 'cinquenta',
		60 => 'sessenta',
		70 => 'setenta',
		80 => 'oitenta',
		90 => 'noventa',
	];

	private $_centenas = [
		0   => '',
		100 => 'cem',
		200 => 'duzentos',
		300 => 'trezentos',
		400 => 'quatrocentos',
		500 => 'quinhentos',
		600 => 'seiscentos',
		700 => 'setecentos',
		800 => 'oitocentos',
		900 => 'novecentos',
	];

	private $_conector = ' e ';

	public function converterNumero( int $numero ) : string {
		$partes = $this->extrairPartes( $numero );

		if( $numero == 1000 ) {
			return 'mil';
		}

		if( $numero == 0 ) {
			return 'zero';
		}

		return $this->_processaExcecoes( $numero, $this->_centenas[$partes['centena']] .
				( $partes['centena'] && $partes['dezena'] ? $this->_conector : '' ) .
				$this->_dezenas[$partes['dezena']] .
				( ( $partes['dezena'] && $partes['unidade'] )
					||
				  ( $partes['centena'] && $partes['unidade'] ) ? $this->_conector : '' ) .
				$this->_unidades[$partes['unidade']] );
	}


	private function _processaExcecoes( int $valorNumero, string $numero ): string
	{
		if( $valorNumero > 100 && $valorNumero < 200 ) {
			$numero = str_replace( "cem e", "cento e", $numero );
		} 
		$numero = trim(
			str_replace(
				array(
					'dez e um',
					'dez e dois',
					'dez e tres',
					'dez e quatro',
					'dez e cinco',
					'dez e seis',
					'dez e sete',
					'dez e oito',
					'dez e nove'
				),

				array(
					'onze',
					'doze',
					'treze',
					'quatorze',
					'quinze',
					'dezesseis',
					'desessete',
					'dezoito',
					'dezenove'
				),

				$numero
		 	) );

		return $numero;
	}

	private function extrairPartes( int $numero ): array 
	{
		$numero = (string) $numero;

		if( $numero >= 100 ) {
			$cent   = $numero[0] * 100;
			$dez    = $numero[1] * 10;
			$unid   = $numero[2]; 
		}

		if( $numero >= 10 && $numero < 100 ) {
			$cent   = 0;
			$dez    = $numero[0] * 10;
			$unid   = $numero[1];
		}

		if( $numero < 10 ) {
			$cent   = 0;
			$dez    = 0;
			$unid   = $numero;
		}

		return [
			'centena' => $cent,
			'dezena'  => $dez,
			'unidade' => $unid
		];
	}
}