<?php
namespace extas\components\books\editions;

use extas\components\SystemContainer;
use extas\interfaces\books\editions\IEdition;
use extas\interfaces\books\editions\IEditionRepository;
use extas\interfaces\books\editions\IHasEdition;

/**
 * Trait THasEdition
 *
 * @property $config
 *
 * @package extas\components\books\editions
 * @author jeyroik@gmail.com
 */
trait THasEdition
{
    /**
     * @return string
     */
    public function getEditionName(): string
    {
        return $this->config[IHasEdition::FIELD__EDITION_NAME] ?? '';
    }

    /**
     * @return IEdition|null
     */
    public function getEdition(): ?IEdition
    {
        /**
         * @var $editionRepo IEditionRepository
         */
        $editionRepo = SystemContainer::getItem(IEditionRepository::class);

        return $editionRepo->one([IEdition::FIELD__NAME => $this->getEditionName()]);
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setEditionName(string $name)
    {
        $this->config[IHasEdition::FIELD__EDITION_NAME] = $name;

        return $this;
    }
}
