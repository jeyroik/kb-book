<?php
namespace extas\interfaces\books\editions;

use extas\interfaces\players\IHasOwner;
use extas\interfaces\players\IPlayer;

/**
 * Interface IEdition
 *
 * @package extas\interfaces\books\editions
 * @author jeyroik@gmail.com
 */
interface IEdition extends IPlayer, IHasOwner
{
    const SUBJECT = 'kb.book.edition';
}
