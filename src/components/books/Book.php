<?php
namespace extas\components\books;

use extas\components\books\authors\THasAuthors;
use extas\components\books\editions\THasEdition;
use extas\components\Item;
use extas\components\parameters\THasParameters;
use extas\components\players\THasOwner;
use extas\components\templates\THasTemplate;
use extas\components\THasCreatedAt;
use extas\components\THasDescription;
use extas\components\THasId;
use extas\components\THasName;
use extas\components\THasUpdatedAt;
use extas\interfaces\books\IBook;

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
    use THasPages;
    use THasAuthors;
    use THasEdition;

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
