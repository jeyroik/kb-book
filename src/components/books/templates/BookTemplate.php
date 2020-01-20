<?php
namespace extas\components\books\templates;

use extas\components\templates\Template;
use extas\components\THasCreatedAt;
use extas\interfaces\books\templates\IBookTemplate;

/**
 * Class BookTemplate
 *
 * @package extas\components\books\templates
 * @author jeyroik@gmail.com
 */
class BookTemplate extends Template implements IBookTemplate
{
    use THasCreatedAt;

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
