<?php
namespace extas\components\books\authors;

use extas\components\players\Player;
use extas\components\players\THasOwner;
use extas\interfaces\books\authors\IAuthor;

/**
 * Class Author
 *
 * @package extas\components\books\authors
 * @author jeyroik@gmail.com
 */
class Author extends Player implements IAuthor
{
    use THasOwner;

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->config[static::FIELD__FIRST_NAME] ?? '';
    }

    /**
     * @return string
     */
    public function getSecondName(): string
    {
        return $this->config[static::FIELD__SECOND_NAME] ?? '';
    }

    /**
     * @return string
     */
    public function getThirdName(): string
    {
        return $this->config[static::FIELD__THIRD_NAME] ?? '';
    }

    /**
     * @param string $format
     *
     * @return false|int|string
     */
    public function getBornAt(string $format = '')
    {
        $born = $this->config[static::FIELD__BORN_AT] ?? 0;

        return $format ? date($format, $born) : $born;
    }

    /**
     * @param string $format
     *
     * @return false|int|string
     */
    public function getDeadAt(string $format = '')
    {
        $dead = $this->config[static::FIELD__DEAD_AT] ?? 0;

        return $format ? date($format, $dead) : $dead;
    }

    /**
     * @return bool
     */
    public function isDead(): bool
    {
        return $this->getDeadAt() ? true : false;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        $till = $this->isDead() ? $this->getDeadAt() : time();

        return round(($till-$this->getBornAt())/static::TIME__SEC_IN_YEAR);
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setFirstName(string $name)
    {
        $this->config[static::FIELD__FIRST_NAME] = $name;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setSecondName(string $name)
    {
        $this->config[static::FIELD__SECOND_NAME] = $name;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setThirdName(string $name)
    {
        $this->config[static::FIELD__THIRD_NAME] = $name;

        return $this;
    }

    /**
     * @param \DateTime|int|string $time
     *
     * @return $this
     */
    public function setBornAt($time)
    {
        if ($time instanceof \DateTime) {
            $born = $time->getTimestamp();
        } elseif (is_numeric($time)) {
            $born = $time;
        } else {
            $born = strtotime($time);
        }

        $this->config[static::FIELD__BORN_AT] = $born;

        return $this;
    }

    /**
     * @param \DateTime|int|string $time
     *
     * @return $this
     */
    public function setDeadAt($time)
    {
        if ($time instanceof \DateTime) {
            $dead = $time->getTimestamp();
        } elseif (is_numeric($time)) {
            $dead = $time;
        } else {
            $dead = strtotime($time);
        }

        $this->config[static::FIELD__DEAD_AT] = $dead;

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
