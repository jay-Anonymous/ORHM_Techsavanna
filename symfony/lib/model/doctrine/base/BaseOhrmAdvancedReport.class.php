<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmAdvancedReport', 'doctrine');

/**
 * BaseOhrmAdvancedReport
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $definition
 * 
 * @method integer            getId()         Returns the current record's "id" value
 * @method string             getName()       Returns the current record's "name" value
 * @method string             getDefinition() Returns the current record's "definition" value
 * @method OhrmAdvancedReport setId()         Sets the current record's "id" value
 * @method OhrmAdvancedReport setName()       Sets the current record's "name" value
 * @method OhrmAdvancedReport setDefinition() Sets the current record's "definition" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmAdvancedReport extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_advanced_report');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('definition', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}