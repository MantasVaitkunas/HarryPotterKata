<?php
/**
 * Created by PhpStorm.
 * User: mantas
 * Date: 2/6/14
 * Time: 10:17 AM
 */

class BookList implements Iterator {

    /**
     * @var array
     */
    private $_aBooks;

    /**
     * @return array
     */
    public function getBooks()
    {
        return $this->_aBooks;
    }

    /**
     * @param Book $oBook
     */
    public function addBook( $oBook )
    {
        $this->_aBooks[] = $oBook;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return Book
     */
    public function current()
    {
        return current( $this->_aBooks );
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     */
    public function next()
    {
        next( $this->_aBooks );
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return int
     */
    public function key()
    {
        return key( $this->_aBooks );
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    public function valid()
    {
        return current( $this->_aBooks ) instanceof Book;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     */
    public function rewind()
    {
        reset( $this->_aBooks );
    }


} 