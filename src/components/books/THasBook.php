<?php
namespace extas\components\books;

use extas\components\SystemContainer;
use extas\interfaces\books\IBook;
use extas\interfaces\books\IBookRepository;
use extas\interfaces\books\IHasBook;

/**
 * Trait THasBook
 *
 * @property $config
 *
 * @package extas\components\books
 * @author jeyroik@gmail.com
 */
trait THasBook
{
    /**
     * @return string
     */
    public function getBookId(): string
    {
        return $this->config[IHasBook::FIELD__BOOK_ID] ?? '';
    }

    /**
     * @return IBook|null
     */
    public function getBook(): ?IBook
    {
        /**
         * @var $bookRepo IBookRepository
         */
        $bookRepo = SystemContainer::getItem(IBookRepository::class);

        return $bookRepo->one([IBook::FIELD__ID => $this->getBookId()]);
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setBookId(string $id)
    {
        $this->config[IHasBook::FIELD__BOOK_ID] = $id;

        return $this;
    }
}
