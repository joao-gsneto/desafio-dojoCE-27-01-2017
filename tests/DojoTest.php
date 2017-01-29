<?php 
declare(strict_types=1);

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

final class DojoTest extends TestCase {

	/**
	 * @return void
	 */
    public function testTestsAreWorking()
    {
        $this->assertEquals(
            '1',
            '1'
        );

        return;
    }



    public function testNumeroPorExtenso() {
    	$extenso = new DojoCE\NumeroParaExtenso();

    	$this->assertEquals( 
    		'cinquenta e cinco',
    		$extenso->converterParaExtenso(55)
		);


    	$this->assertEquals( 
    		'duzentos e quarenta e nove',
    		$extenso->converterParaExtenso(249)
		);

        $this->assertEquals( 
            'cinco',
            $extenso->converterParaExtenso(5)
        );
		
        $this->assertEquals( 
            'dez',
            $extenso->converterParaExtenso(10)
        );


        $this->assertEquals( 
            'nove',
            $extenso->converterParaExtenso(9)
        );

    	$this->assertEquals( 
    		'oitocentos e vinte e quatro',
    		$extenso->converterParaExtenso(824)
		);

	
    	$this->assertEquals( 
    		'dezenove',
    		$extenso->converterParaExtenso(19)
		);
	   
        $this->assertEquals( 
            'noventa e nove',
            $extenso->converterParaExtenso(99)
        );
    
        $this->assertEquals( 
            'cento e dois',
            $extenso->converterParaExtenso(102)
        );
    
        $this->assertEquals( 
            'mil',
            $extenso->converterParaExtenso(1000)
        );

        $this->assertEquals( 
            'cem',
            $extenso->converterParaExtenso(100)
        );

    	$this->assertEquals( 
    		'novecentos e quatorze',
    		$extenso->converterParaExtenso(914)
		);

        $this->assertEquals( 
            'noventa',
            $extenso->converterParaExtenso(90)
        );

        $this->assertEquals( 
            'novecentos e noventa e nove',
            $extenso->converterParaExtenso(999)
        );

        $this->assertEquals( 
            'setecentos e quarenta e nove',
            $extenso->converterParaExtenso(749)
        );

    }
}