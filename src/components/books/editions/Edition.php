<?php
namespace extas\components\books\editions;

use extas\components\players\Player;
use extas\components\players\THasOwner;
use extas\interfaces\books\editions\IEdition;

/**
 * Class Edition
 *
 * @package extas\components\books\editions
 * @author jeyroik@gmail.com
 */
class Edition extends Player implements IEdition
{
    use THasOwner;

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
