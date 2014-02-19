<?php
/**
 * Created by PhpStorm.
 * User: mantas
 * Date: 2/19/14
 * Time: 9:15 AM
 */

class DiscountTest extends PHPUnit_Framework_TestCase {

    public function testGetDiscount()
    {
        $oDiscount = new Discount(5, 2);
        $this->assertEquals( 5, $oDiscount->getDiscount() );
    }

}
 