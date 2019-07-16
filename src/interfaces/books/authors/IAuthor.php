<?php
namespace extas\interfaces\books\authors;

use extas\interfaces\players\IHasOwner;
use extas\interfaces\players\IPlayer;

/**
 * Interface IAuthor
 *
 * @package extas\interfaces\books\authors
 * @author jeyroik@gmail.com
 */
interface IAuthor extends IPlayer, IHasOwner
{
    const SUBJECT = 'kb.book.author';

    const FIELD__FIRST_NAME = 'first_name';
    const FIELD__SECOND_NAME = 'second_name';
    const FIELD__THIRD_NAME = 'third_name';
    const FIELD__BORN_AT = 'born_at';
    const FIELD__DEAD_AT = 'dead_at';

    const TIME__SEC_IN_YEAR = 31536000;

    /**
     * @return string
     */
    public function getFirstName(): string;

    /**
     * @return string
     */
    public function getSecondName(): string;

    /**
     * @return string
     */
    public function getThirdName(): string;

    /**
     * @param string $format
     *
     * @return string|int
     */
    public function getBornAt(string $format = '');

    /**
     * @param string $format
     *
     * @return string|int
     */
    public function getDeadAt(string $format = '');

    /**
     * @return bool
     */
    public function isDead(): bool;

    /**
     * @return int
     */
    public function getAge(): int;

    /**
     * @param string $name
     * 
     * @return $this
     */
    public function setFirstName(string $name);

    /**
     * @param string $name
     * 
     * @return $this
     */
    public function setSecondName(string $name);

    /**
     * @param string $name
     * 
     * @return $this
     */
    public function setThirdName(string $name);

    /**
     * @param string|int|\DateTime $time
     * 
     * @return $this
     */
    public function setBornAt($time);

    /**
     * @param string|int|\DateTime $time
     * 
     * @return $this
     */
    public function setDeadAt($time);
}
