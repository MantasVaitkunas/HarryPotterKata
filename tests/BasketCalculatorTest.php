<?php
/**
 * Created by PhpStorm.
 * User: mantas
 * Date: 1/21/14
 * Time: 10:18 AM
 */

class BasketCalculatorTest extends PHPUnit_Framework_TestCase {

    public function providerCalculate()
    {
        return array(
            array( array(1), 8 ),
            array( array(1, 2), 16 ),
            array( array(1, 2, 3), 24 ),
            array( array(1, 1, 1), 24 ),
        );
    }

    /**
     * @dataProvider providerCalculate
     * @param $aBooks
     * @param $iResult
     */
    public function testCalculate( $aBooks, $iResult )
    {
        $oBasketCalculator = new BasketCalculator();

        $this->assertSame( $iResult, $oBasketCalculator->calculate( $aBooks ) );
    }
}