<?php
namespace extas\components\books\templates;

use extas\components\Item;
use extas\components\parameters\THasParameters;
use extas\components\players\THasOwner;
use extas\components\THasCreatedAt;
use extas\components\THasDescription;
use extas\components\THasName;
use extas\interfaces\books\templates\IBookTemplate;

/**
 * Class BookTemplate
 *
 * @package extas\components\books\templates
 * @author jeyroik@gmail.com
 */
class BookTemplate extends Item implements IBookTemplate
{
    use THasParameters;
    use THasOwner;
    use THasName;
    use THasDescription;
    use THasCreatedAt;

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
