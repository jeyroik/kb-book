<?php
namespace extas\components\plugins;

use extas\components\books\editions\Edition;
use extas\interfaces\books\editions\IEditionRepository;

/**
 * Class PluginInstallEditions
 *
 * @package extas\components\plugins
 * @author jeyroik@gmail.com
 */
class PluginInstallEditions extends PluginInstallDefault
{
    protected $selfName = 'edition';
    protected $selfSection = 'editions';
    protected $selfUID = Edition::FIELD__NAME;
    protected $selfRepositoryClass = IEditionRepository::class;
    protected $selfItemClass = Edition::class;
}
