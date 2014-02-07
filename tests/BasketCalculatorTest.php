<?php
/**
 * Created by PhpStorm.
 * User: mantas
 * Date: 1/21/14
 * Time: 10:18 AM
 */

class BasketCalculatorTest extends PHPUnit_Framework_TestCase
{

    public function providerCalculate()
    {
        return array(
            array(
                $this->_getBookList( array( 1 ) ), 8
            ),
            array(
                $this->_getBookList( array( 1, 2 ) ), 16
            ),
            array(
                $this->_getBookList( array( 1, 1 ) ), 15.2
            ),
        );
    }

    /**
     * @dataProvider providerCalculate
     */
    public function testCalculate( $oBookList, $dResult )
    {
        $oBasketCalculator = new BasketCalculator();

        $this->assertSame( $dResult, $oBasketCalculator->calculate( $oBookList ) );
    }

    /**
     * @param $aBooksIds
     * @return BookList
     */
    protected function _getBookList( $aBooksIds )
    {
        $oBookList = new BookList();
        foreach ( $aBooksIds as $iBookId ) {
            $oBook = new Book( $iBookId );
            $oBookList->addBook( $oBook );
        }

        return $oBookList;
    }
}