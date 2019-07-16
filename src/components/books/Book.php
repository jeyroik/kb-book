<?php
namespace extas\components\books;

use extas\components\Item;
use extas\components\parameters\THasParameters;
use extas\components\players\THasOwner;
use extas\components\SystemContainer;
use extas\components\templates\THasTemplate;
use extas\components\THasCreatedAt;
use extas\components\THasDescription;
use extas\components\THasId;
use extas\components\THasName;
use extas\components\THasUpdatedAt;
use extas\interfaces\books\authors\IAuthor;
use extas\interfaces\books\IBook;
use extas\interfaces\players\IPlayer;
use extas\interfaces\players\IPlayerRepository;

/**
 * Class Book
 *
 * @package extas\components\books
 * @author jeyroik@gmail.com
 */
class Book extends Item implements IBook
{
    use THasId;
    use THasName;
    use THasDescription;
    use THasOwner;
    use THasCreatedAt;
    use THasUpdatedAt;
    use THasParameters;
    use THasTemplate;

    /**
     * @return array
     */
    public function getAuthorsNames(): array
    {
        return $this->config[static::FIELD__AUTHORS_NAMES] ?? [];
    }

    /**
     * @return IAuthor[]
     */
    public function getAuthors()
    {
        /**
         * @var $playerRepo IPlayerRepository
         */
        $playerRepo = SystemContainer::getItem(IPlayerRepository::class);

        return $playerRepo->all([IPlayer::FIELD__NAME => $this->getAuthorsNames()]);
    }

    /**
     * @return string
     */
    public function getEditionName(): string
    {
        return $this->config[static::FIELD__EDITION_NAME] ?? '';
    }

    /**
     * @return IPlayer|null
     */
    public function getEdition(): ?IPlayer
    {
        /**
         * @var $playerRepo IPlayerRepository
         */
        $playerRepo = SystemContainer::getItem(IPlayerRepository::class);

        return $playerRepo->one([IPlayer::FIELD__NAME => $this->getEditionName()]);
    }

    /**
     * @return int
     */
    public function getPagesCount(): int
    {
        return $this->config[static::FIELD__PAGES_COUNT] ?? 0;
    }

    /**
     * @param string $format
     *
     * @return false|int|string
     */
    public function getPublishedAt(string $format = '')
    {
        $publishedAt = $this->config[static::FIELD__PUBLISHED_AT] ?? 0;

        return $format ? date($format, $publishedAt) : $publishedAt;
    }

    /**
     * @param array $names
     *
     * @return $this
     */
    public function setAuthorsNames(array $names)
    {
        $this->config[static::FIELD__AUTHORS_NAMES] = $names;

        return $this;
    }

    /**
     * @param IAuthor|string $author
     *
     * @return $this
     */
    public function addAuthor($author)
    {
        $this->config[static::FIELD__AUTHORS_NAMES] = $this->getAuthors();
        $this->config[static::FIELD__AUTHORS_NAMES][] = $author instanceof IAuthor ? $author->getName() : $author;

        return $this;
    }

    /**
     * @param string $editionName
     *
     * @return $this
     */
    public function setEditionName(string $editionName)
    {
        $this->config[static::FIELD__EDITION_NAME] = $editionName;

        return $this;
    }

    /**
     * @param int $pagesCount
     *
     * @return $this
     */
    public function setPagesCount(int $pagesCount)
    {
        $this->config[static::FIELD__PAGES_COUNT] = $pagesCount;

        return $this;
    }

    /**
     * @param \DateTime|int|string $publishedAt
     *
     * @return $this
     */
    public function setPublishedAt($publishedAt)
    {
        if ($publishedAt instanceof \DateTime) {
            $published = $publishedAt->getTimestamp();
        } elseif (is_numeric($publishedAt)) {
            $published = $publishedAt;
        } else {
            $published = strtotime($publishedAt);
        }

        $this->config[static::FIELD__PUBLISHED_AT] = $published;

        return $this;
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
