<?php 
declare(strict_types=1);

namespace DojoCE;

class NumeroParaExtenso
{
	private $_numerosHelper;

	public function __construct( )
	{
		$this->_numerosHelper = new NumerosHelper();
	}


	public function converterParaExtenso( int $numero ): string 
	{
		return $this->_numerosHelper->converterNumero( $numero );
	}
}