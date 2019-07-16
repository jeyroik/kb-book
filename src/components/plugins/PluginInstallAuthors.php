<?php
namespace extas\components\plugins;

use extas\components\books\authors\Author;
use extas\interfaces\books\authors\IAuthorRepository;

/**
 * Class PluginInstallAuthors
 *
 * @package extas\components\plugins
 * @author jeyroik@gmail.com
 */
class PluginInstallAuthors extends PluginInstallDefault
{
    protected $selfName = 'author';
    protected $selfSection = 'authors';
    protected $selfUID = Author::FIELD__NAME;
    protected $selfRepositoryClass = IAuthorRepository::class;
    protected $selfItemClass = Author::class;
}
