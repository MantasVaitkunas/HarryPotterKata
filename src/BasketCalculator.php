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
     * @param $aBooks
     * @return int
     */
    public function calculate( $aBooks )
    {
        return count( $aBooks ) * $this->getBooksPrice();
    }
}