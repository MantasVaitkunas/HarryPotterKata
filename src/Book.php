<?php
/**
 * Created by PhpStorm.
 * User: mantas
 * Date: 2/6/14
 * Time: 10:15 AM
 */

class Book {
    private $iBookId;
    private $iPrice = 8;

    function __construct( $iBookId )
    {
        $this->iBookId = $iBookId;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->iPrice;
    }

} 