<?php
namespace extas\components\books\authors;

use extas\components\SystemContainer;
use extas\interfaces\books\authors\IAuthor;
use extas\interfaces\books\authors\IAuthorRepository;
use extas\interfaces\books\authors\IHasAuthors;

/**
 * Trait THasAuthors
 *
 * @property $config
 *
 * @package extas\components\books\authors
 * @author jeyroik@gmail.com
 */
trait THasAuthors
{
    /**
     * @return string[]
     */
    public function getAuthorsNames(): array
    {
        return $this->config[IHasAuthors::FIELD__AUTHORS_NAMES] ?? [];
    }

    /**
     * @return IAuthor[]
     */
    public function getAuthors(): array
    {
        /**
         * @var $authorsRepo IAuthorRepository
         */
        $authorsRepo = SystemContainer::getItem(IAuthorRepository::class);

        return $authorsRepo->all([IAuthor::FIELD__NAME => $this->getAuthorsNames()]);
    }

    /**
     * @param string[]|IAuthor[] $names
     *
     * @return $this
     */
    public function setAuthorsNames(array $names)
    {
        $this->config[IHasAuthors::FIELD__AUTHORS_NAMES] = $names;

        return $this;
    }

    /**
     * @param IAuthor $author
     *
     * @return $this
     */
    public function addAuthor(IAuthor $author)
    {
        $this->config[IHasAuthors::FIELD__AUTHORS_NAMES] = $this->getAuthorsNames();
        $this->config[IHasAuthors::FIELD__AUTHORS_NAMES][] = $author instanceof IAuthor
            ? $author->getName()
            : (string) $author;

        return $this;
    }
}
