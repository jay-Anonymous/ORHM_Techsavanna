<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmLeaveAdjustment', 'doctrine');

/**
 * BaseOhrmLeaveAdjustment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $emp_number
 * @property decimal $no_of_days
 * @property integer $leave_type_id
 * @property timestamp $from_date
 * @property timestamp $to_date
 * @property timestamp $credited_date
 * @property string $note
 * @property integer $adjustment_type
 * @property integer $deleted
 * @property integer $created_by_id
 * @property string $created_by_name
 * 
 * @method integer             getId()              Returns the current record's "id" value
 * @method integer             getEmpNumber()       Returns the current record's "emp_number" value
 * @method decimal             getNoOfDays()        Returns the current record's "no_of_days" value
 * @method integer             getLeaveTypeId()     Returns the current record's "leave_type_id" value
 * @method timestamp           getFromDate()        Returns the current record's "from_date" value
 * @method timestamp           getToDate()          Returns the current record's "to_date" value
 * @method timestamp           getCreditedDate()    Returns the current record's "credited_date" value
 * @method string              getNote()            Returns the current record's "note" value
 * @method integer             getAdjustmentType()  Returns the current record's "adjustment_type" value
 * @method integer             getDeleted()         Returns the current record's "deleted" value
 * @method integer             getCreatedById()     Returns the current record's "created_by_id" value
 * @method string              getCreatedByName()   Returns the current record's "created_by_name" value
 * @method OhrmLeaveAdjustment setId()              Sets the current record's "id" value
 * @method OhrmLeaveAdjustment setEmpNumber()       Sets the current record's "emp_number" value
 * @method OhrmLeaveAdjustment setNoOfDays()        Sets the current record's "no_of_days" value
 * @method OhrmLeaveAdjustment setLeaveTypeId()     Sets the current record's "leave_type_id" value
 * @method OhrmLeaveAdjustment setFromDate()        Sets the current record's "from_date" value
 * @method OhrmLeaveAdjustment setToDate()          Sets the current record's "to_date" value
 * @method OhrmLeaveAdjustment setCreditedDate()    Sets the current record's "credited_date" value
 * @method OhrmLeaveAdjustment setNote()            Sets the current record's "note" value
 * @method OhrmLeaveAdjustment setAdjustmentType()  Sets the current record's "adjustment_type" value
 * @method OhrmLeaveAdjustment setDeleted()         Sets the current record's "deleted" value
 * @method OhrmLeaveAdjustment setCreatedById()     Sets the current record's "created_by_id" value
 * @method OhrmLeaveAdjustment setCreatedByName()   Sets the current record's "created_by_name" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmLeaveAdjustment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_leave_adjustment');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('emp_number', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('no_of_days', 'decimal', 19, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 19,
             'scale' => '15',
             ));
        $this->hasColumn('leave_type_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('from_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('to_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('credited_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('note', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('adjustment_type', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('deleted', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('created_by_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('created_by_name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}