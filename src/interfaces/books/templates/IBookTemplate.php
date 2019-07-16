<?php
namespace extas\interfaces\books\templates;

use extas\interfaces\IHasCreatedAt;
use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;
use extas\interfaces\parameters\IHasParameters;
use extas\interfaces\players\IHasOwner;

/**
 * Interface IBookTemplate
 *
 * @package extas\interfaces\books\templates
 * @author jeyroik@gmail.com
 */
interface IBookTemplate extends IItem, IHasName, IHasDescription, IHasParameters, IHasOwner, IHasCreatedAt
{
    const SUBJECT = 'kb.book.template';
}
