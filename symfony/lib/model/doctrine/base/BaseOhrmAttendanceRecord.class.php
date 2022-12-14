<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmAttendanceRecord', 'doctrine');

/**
 * BaseOhrmAttendanceRecord
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $employee_id
 * @property timestamp $punch_in_utc_time
 * @property string $punch_in_note
 * @property string $punch_in_time_offset
 * @property timestamp $punch_in_user_time
 * @property timestamp $punch_out_utc_time
 * @property string $punch_out_note
 * @property string $punch_out_time_offset
 * @property timestamp $punch_out_user_time
 * @property string $state
 * 
 * @method integer              getId()                    Returns the current record's "id" value
 * @method integer              getEmployeeId()            Returns the current record's "employee_id" value
 * @method timestamp            getPunchInUtcTime()        Returns the current record's "punch_in_utc_time" value
 * @method string               getPunchInNote()           Returns the current record's "punch_in_note" value
 * @method string               getPunchInTimeOffset()     Returns the current record's "punch_in_time_offset" value
 * @method timestamp            getPunchInUserTime()       Returns the current record's "punch_in_user_time" value
 * @method timestamp            getPunchOutUtcTime()       Returns the current record's "punch_out_utc_time" value
 * @method string               getPunchOutNote()          Returns the current record's "punch_out_note" value
 * @method string               getPunchOutTimeOffset()    Returns the current record's "punch_out_time_offset" value
 * @method timestamp            getPunchOutUserTime()      Returns the current record's "punch_out_user_time" value
 * @method string               getState()                 Returns the current record's "state" value
 * @method OhrmAttendanceRecord setId()                    Sets the current record's "id" value
 * @method OhrmAttendanceRecord setEmployeeId()            Sets the current record's "employee_id" value
 * @method OhrmAttendanceRecord setPunchInUtcTime()        Sets the current record's "punch_in_utc_time" value
 * @method OhrmAttendanceRecord setPunchInNote()           Sets the current record's "punch_in_note" value
 * @method OhrmAttendanceRecord setPunchInTimeOffset()     Sets the current record's "punch_in_time_offset" value
 * @method OhrmAttendanceRecord setPunchInUserTime()       Sets the current record's "punch_in_user_time" value
 * @method OhrmAttendanceRecord setPunchOutUtcTime()       Sets the current record's "punch_out_utc_time" value
 * @method OhrmAttendanceRecord setPunchOutNote()          Sets the current record's "punch_out_note" value
 * @method OhrmAttendanceRecord setPunchOutTimeOffset()    Sets the current record's "punch_out_time_offset" value
 * @method OhrmAttendanceRecord setPunchOutUserTime()      Sets the current record's "punch_out_user_time" value
 * @method OhrmAttendanceRecord setState()                 Sets the current record's "state" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmAttendanceRecord extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_attendance_record');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('employee_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('punch_in_utc_time', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('punch_in_note', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('punch_in_time_offset', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('punch_in_user_time', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('punch_out_utc_time', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('punch_out_note', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('punch_out_time_offset', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('punch_out_user_time', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('state', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}