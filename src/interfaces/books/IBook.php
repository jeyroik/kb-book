<?php
namespace extas\interfaces\books;

use extas\interfaces\books\authors\IHasAuthors;
use extas\interfaces\books\editions\IHasEdition;
use extas\interfaces\IHasCreatedAt;
use extas\interfaces\IHasDescription;
use extas\interfaces\IHasId;
use extas\interfaces\IHasName;
use extas\interfaces\IHasUpdatedAt;
use extas\interfaces\IItem;
use extas\interfaces\parameters\IHasParameters;
use extas\interfaces\players\IHasOwner;
use extas\interfaces\templates\IHasTemplate;

/**
 * Interface IBook
 * 
 * @package extas\interfaces\books
 * @author jeyroik@gmail.com
 */
interface IBook extends
    IItem,
    IHasName,
    IHasDescription,
    IHasOwner,
    IHasCreatedAt,
    IHasUpdatedAt,
    IHasId,
    IHasParameters,
    IHasTemplate,
    IHasAuthors,
    IHasEdition,
    IHasPages
{
    const SUBJECT = 'kb.book';
    const FIELD__PUBLISHED_AT = 'published_at';

    /**
     * @param string $format
     * 
     * @return string|int
     */
    public function getPublishedAt(string $format = '');

    /**
     * @param string|int|\DateTime $publishedAt
     * 
     * @return $this
     */
    public function setPublishedAt($publishedAt);
}
