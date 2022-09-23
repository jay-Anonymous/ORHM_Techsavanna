<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmLeaveStatus', 'doctrine');

/**
 * BaseOhrmLeaveStatus
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $status
 * @property string $name
 * 
 * @method integer         getId()     Returns the current record's "id" value
 * @method integer         getStatus() Returns the current record's "status" value
 * @method string          getName()   Returns the current record's "name" value
 * @method OhrmLeaveStatus setId()     Sets the current record's "id" value
 * @method OhrmLeaveStatus setStatus() Sets the current record's "status" value
 * @method OhrmLeaveStatus setName()   Sets the current record's "name" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmLeaveStatus extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_leave_status');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('status', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 2,
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
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}