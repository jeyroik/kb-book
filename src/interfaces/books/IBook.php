<?php
namespace extas\interfaces\books;

use extas\interfaces\books\authors\IAuthor;
use extas\interfaces\IHasCreatedAt;
use extas\interfaces\IHasDescription;
use extas\interfaces\IHasId;
use extas\interfaces\IHasName;
use extas\interfaces\IHasUpdatedAt;
use extas\interfaces\IItem;
use extas\interfaces\parameters\IHasParameters;
use extas\interfaces\players\IHasOwner;
use extas\interfaces\players\IPlayer;
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
    IHasTemplate
{
    const SUBJECT = 'kb.book';

    const FIELD__AUTHORS_NAMES = 'authors_names';
    const FIELD__EDITION_NAME = 'edition_name';
    const FIELD__PAGES_COUNT = 'pages_count';
    const FIELD__PUBLISHED_AT = 'published_at';

    /**
     * @return array
     */
    public function getAuthorsNames(): array;

    /**
     * @return IAuthor[]
     */
    public function getAuthors();

    /**
     * @return string
     */
    public function getEditionName(): string;

    /**
     * @return IPlayer|null
     */
    public function getEdition(): ?IPlayer;

    /**
     * @return int
     */
    public function getPagesCount(): int;

    /**
     * @param string $format
     * 
     * @return string|int
     */
    public function getPublishedAt(string $format = '');

    /**
     * @param array $names
     * 
     * @return $this
     */
    public function setAuthorsNames(array $names);

    /**
     * @param IAuthor|string $author
     *
     * @return $this
     */
    public function addAuthor($author);

    /**
     * @param string $editionName
     * 
     * @return $this
     */
    public function setEditionName(string $editionName);

    /**
     * @param int $pagesCount
     * 
     * @return $this
     */
    public function setPagesCount(int $pagesCount);

    /**
     * @param string|int|\DateTime $publishedAt
     * 
     * @return $this
     */
    public function setPublishedAt($publishedAt);
}
