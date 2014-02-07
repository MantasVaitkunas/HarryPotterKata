<?php
/**
 * Created by PhpStorm.
 * User: mantas
 * Date: 1/21/14
 * Time: 10:18 AM
 */
class BookListTest extends PHPUnit_Framework_TestCase
{
    public function testAddBooks()
    {
        $oBookList = new BookList();
        $oBook1 = new Book(1);
        $oBookList->addBook($oBook1);

        $this->assertSame( array($oBook1), $oBookList->getBooks() );
    }

    public function testBookListIteration()
    {
        $oBookList = new BookList();

        $oBook1 = new Book(1);
        $oBook2 = new Book(2);
        $oBookList->addBook($oBook1);
        $oBookList->addBook($oBook2);

        $aBooks = array();
        foreach ( $oBookList as $oBook ) {
            $aBooks[] = $oBook;
        }

        $this->assertSame( array( $oBook1, $oBook2 ), $aBooks );
    }
}