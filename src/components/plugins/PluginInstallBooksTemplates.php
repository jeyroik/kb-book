<?php
namespace extas\components\plugins;
use extas\components\books\templates\BookTemplate;
use extas\interfaces\books\templates\IBookTemplateRepository;

/**
 * Class PluginInstallBooksTemplates
 *
 * @package extas\components\plugins
 * @author jeyroik@gmail.com
 */
class PluginInstallBooksTemplates extends PluginInstallDefault
{
    protected $selfItemClass = BookTemplate::class;
    protected $selfName = 'book template';
    protected $selfSection = 'books_templates';
    protected $selfUID = BookTemplate::FIELD__NAME;
    protected $selfRepositoryClass = IBookTemplateRepository::class;
}
