<?php
/**
 * Created by PhpStorm.
 * User: mantas
 * Date: 2/6/14
 * Time: 10:15 AM
 */

class Book {
    private $iPrice = 8;

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->iPrice;
    }

} 