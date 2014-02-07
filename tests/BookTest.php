<?php
/**
 * Created by PhpStorm.
 * User: mantas
 * Date: 2/7/14
 * Time: 10:20 AM
 */

class BookTest extends PHPUnit_Framework_TestCase {

    public function testGetPrice()
    {
        $oBook = new Book( 1 );

        $this->assertSame( 8, $oBook->getPrice() );
    }
}
 