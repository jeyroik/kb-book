<?php
namespace extas\components\books;

use extas\components\repositories\Repository;
use extas\interfaces\books\IBookRepository;

/**
 * Class BookRepository
 *
 * @package extas\components\books
 * @author jeyroik@gmail.com
 */
class BookRepository extends Repository implements IBookRepository
{
    protected $idAs = Book::FIELD__ID;
    protected $name = 'books';
    protected $scope = 'kb';
    protected $pk = Book::FIELD__NAME;
    protected $itemClass = Book::class;
}
