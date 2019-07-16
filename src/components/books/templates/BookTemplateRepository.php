<?php
namespace extas\components\books\templates;

use extas\components\repositories\Repository;
use extas\interfaces\books\templates\IBookTemplateRepository;

/**
 * Class BookTemplateRepository
 *
 * @package extas\components\books\templates
 * @author jeyroik@gmail.com
 */
class BookTemplateRepository extends Repository implements IBookTemplateRepository
{
    protected $itemClass = BookTemplate::class;
    protected $pk = BookTemplate::FIELD__NAME;
    protected $scope = 'kb';
    protected $name = 'book template';
    protected $idAs = '';
}
