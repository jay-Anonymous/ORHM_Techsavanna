<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmProject', 'doctrine');

/**
 * BaseOhrmProject
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $project_id
 * @property integer $customer_id
 * @property string $name
 * @property string $description
 * @property integer $is_deleted
 * 
 * @method integer     getProjectId()   Returns the current record's "project_id" value
 * @method integer     getCustomerId()  Returns the current record's "customer_id" value
 * @method string      getName()        Returns the current record's "name" value
 * @method string      getDescription() Returns the current record's "description" value
 * @method integer     getIsDeleted()   Returns the current record's "is_deleted" value
 * @method OhrmProject setProjectId()   Sets the current record's "project_id" value
 * @method OhrmProject setCustomerId()  Sets the current record's "customer_id" value
 * @method OhrmProject setName()        Sets the current record's "name" value
 * @method OhrmProject setDescription() Sets the current record's "description" value
 * @method OhrmProject setIsDeleted()   Sets the current record's "is_deleted" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmProject extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_project');
        $this->hasColumn('project_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('customer_id', 'integer', 4, array(
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
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('description', 'string', 256, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 256,
             ));
        $this->hasColumn('is_deleted', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}