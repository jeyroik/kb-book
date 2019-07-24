<?php
namespace extas\components\books;

use extas\interfaces\books\IHasPages;

/**
 * Trait THasPages
 *
 * @property $config
 *
 * @package extas\components\books
 * @author jeyroik@gmail.com
 */
trait THasPages
{
    /**
     * @return int
     */
    public function getPagesCount(): int
    {
        return $this->config[IHasPages::FIELD__PAGES_COUNT] ?? 0;
    }

    /**
     * @param int $pages
     *
     * @return $this
     */
    public function setPagesCount(int $pages)
    {
        $this->config[IHasPages::FIELD__PAGES_COUNT] = $pages;

        return $this;
    }
}
