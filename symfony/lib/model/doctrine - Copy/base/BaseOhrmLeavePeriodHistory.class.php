<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmLeavePeriodHistory', 'doctrine');

/**
 * BaseOhrmLeavePeriodHistory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $leave_period_start_month
 * @property integer $leave_period_start_day
 * @property date $created_at
 * 
 * @method integer                getId()                       Returns the current record's "id" value
 * @method integer                getLeavePeriodStartMonth()    Returns the current record's "leave_period_start_month" value
 * @method integer                getLeavePeriodStartDay()      Returns the current record's "leave_period_start_day" value
 * @method date                   getCreatedAt()                Returns the current record's "created_at" value
 * @method OhrmLeavePeriodHistory setId()                       Sets the current record's "id" value
 * @method OhrmLeavePeriodHistory setLeavePeriodStartMonth()    Sets the current record's "leave_period_start_month" value
 * @method OhrmLeavePeriodHistory setLeavePeriodStartDay()      Sets the current record's "leave_period_start_day" value
 * @method OhrmLeavePeriodHistory setCreatedAt()                Sets the current record's "created_at" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmLeavePeriodHistory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_leave_period_history');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('leave_period_start_month', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('leave_period_start_day', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('created_at', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}