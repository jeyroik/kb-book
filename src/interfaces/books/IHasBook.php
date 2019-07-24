<?php
namespace extas\interfaces\books;

/**
 * Interface IHasBook
 *
 * @package extas\interfaces\books
 * @author jeyroik@gmail.com
 */
interface IHasBook
{
    const FIELD__BOOK_ID = 'book_id';

    /**
     * @return string
     */
    public function getBookId(): string;

    /**
     * @return IBook|null
     */
    public function getBook(): ?IBook;

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setBookId(string $id);
}
