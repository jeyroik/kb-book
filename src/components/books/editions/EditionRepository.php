<?php
namespace extas\components\books\editions;

use extas\components\players\PlayerRepository;
use extas\interfaces\books\editions\IEditionRepository;

/**
 * Class EditionRepository
 *
 * @package extas\components\books\editions
 * @author jeyroik@gmail.com
 */
class EditionRepository extends PlayerRepository implements IEditionRepository
{
    protected $itemClass = Edition::class;
}
