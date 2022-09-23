<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmLeaveLeaveEntitlement', 'doctrine');

/**
 * BaseOhrmLeaveLeaveEntitlement
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $leave_id
 * @property integer $entitlement_id
 * @property decimal $length_days
 * 
 * @method integer                   getId()             Returns the current record's "id" value
 * @method integer                   getLeaveId()        Returns the current record's "leave_id" value
 * @method integer                   getEntitlementId()  Returns the current record's "entitlement_id" value
 * @method decimal                   getLengthDays()     Returns the current record's "length_days" value
 * @method OhrmLeaveLeaveEntitlement setId()             Sets the current record's "id" value
 * @method OhrmLeaveLeaveEntitlement setLeaveId()        Sets the current record's "leave_id" value
 * @method OhrmLeaveLeaveEntitlement setEntitlementId()  Sets the current record's "entitlement_id" value
 * @method OhrmLeaveLeaveEntitlement setLengthDays()     Sets the current record's "length_days" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmLeaveLeaveEntitlement extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_leave_leave_entitlement');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('leave_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('entitlement_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('length_days', 'decimal', 6, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 6,
             'scale' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}