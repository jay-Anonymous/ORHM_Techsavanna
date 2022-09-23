<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmPlugin', 'doctrine');

/**
 * BaseOhrmPlugin
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $version
 * 
 * @method integer    getId()      Returns the current record's "id" value
 * @method string     getName()    Returns the current record's "name" value
 * @method string     getVersion() Returns the current record's "version" value
 * @method OhrmPlugin setId()      Sets the current record's "id" value
 * @method OhrmPlugin setName()    Sets the current record's "name" value
 * @method OhrmPlugin setVersion() Sets the current record's "version" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmPlugin extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_plugin');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
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
        $this->hasColumn('version', 'string', 32, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 32,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}