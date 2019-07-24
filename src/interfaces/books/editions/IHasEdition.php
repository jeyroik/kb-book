<?php
namespace extas\interfaces\books\editions;

/**
 * Interface IHasEdition
 *
 * @package extas\interfaces\books\editions
 * @author jeyroik@gmail.com
 */
interface IHasEdition
{
    const FIELD__EDITION_NAME = 'edition_name';

    /**
     * @return string
     */
    public function getEditionName(): string;

    /**
     * @return IEdition|null
     */
    public function getEdition(): ?IEdition;

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setEditionName(string $name);
}
