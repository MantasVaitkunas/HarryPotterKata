<?php
/**
 * Created by PhpStorm.
 * User: mantas
 * Date: 2/19/14
 * Time: 9:31 AM
 */

class Discount {
    private $_iDiscount;
    private $_iDifferentBooksAmount;

    public function __construct( $iDiscount, $iDifferentBooksAmount )
    {
        $this->_iDiscount = $iDiscount;
        $this->_iDifferentBooksAmount = $iDifferentBooksAmount;
    }

    public function getDiscount()
    {
        return $this->_iDiscount;
    }


} 