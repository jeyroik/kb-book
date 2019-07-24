<?php
namespace extas\interfaces\books;

/**
 * Interface IHasPages
 *
 * @package extas\interfaces\books
 * @author jeyroik@gmail.com
 */
interface IHasPages
{
    const FIELD__PAGES_COUNT = 'pages_count';

    /**
     * @return int
     */
    public function getPagesCount(): int;

    /**
     * @param int $pages
     *
     * @return $this
     */
    public function setPagesCount(int $pages);
}
