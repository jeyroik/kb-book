<?php
namespace extas\components\plugins;

use extas\components\books\Book;
use extas\interfaces\books\IBookRepository;

/**
 * Class PluginInstallBooks
 *
 * @package extas\components\plugins
 * @author jeyroik@gmail.com
 */
class PluginInstallBooks extends PluginInstallDefault
{
    protected $selfItemClass = Book::class;
    protected $selfRepositoryClass = IBookRepository::class;
    protected $selfUID = Book::FIELD__ID;
    protected $selfSection = 'books';
    protected $selfName = 'book';
}
