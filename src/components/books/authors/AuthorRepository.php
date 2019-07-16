<?php
namespace extas\components\books\authors;

use extas\components\players\PlayerRepository;
use extas\interfaces\books\authors\IAuthorRepository;

/**
 * Class AuthorRepository
 *
 * @package extas\components\books\authors
 * @author jeyroik@gmail.com
 */
class AuthorRepository extends PlayerRepository implements IAuthorRepository
{
    protected $itemClass = Author::class;
}
