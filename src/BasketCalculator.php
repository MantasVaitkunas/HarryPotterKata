<?php
/**
 * Created by PhpStorm.
 * User: mantas
 * Date: 1/21/14
 * Time: 10:22 AM
 */

class BasketCalculator {

    private $iBooksPrice = 8;

    /**
     * @return int
     */
    public function getBooksPrice()
    {
        return $this->iBooksPrice;
    }

    /**
     * @param BookList $oBookList
     * @return int
     */
    public function calculate( BookList $oBookList )
    {
        $dResult = 0;
        foreach ( $oBookList as $oBook ) {
            $dResult += $oBook->getPrice();
        }
        return $dResult;
    }
}