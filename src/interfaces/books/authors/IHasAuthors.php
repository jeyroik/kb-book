<?php
namespace extas\interfaces\books\authors;

/**
 * Interface IHasAuthor
 *
 * @package extas\interfaces\books\authors
 * @author jeyroik@gmail.com
 */
interface IHasAuthors
{
    const FIELD__AUTHORS_NAMES = 'authors_names';

    /**
     * @return string[]
     */
    public function getAuthorsNames(): array;

    /**
     * @return IAuthor[]
     */
    public function getAuthors(): array;

    /**
     * @param string[]|IAuthor[] $names
     *
     * @return $this
     */
    public function setAuthorsNames(array $names);

    /**
     * @param IAuthor $author
     *
     * @return $this
     */
    public function addAuthor(IAuthor $author);
}
