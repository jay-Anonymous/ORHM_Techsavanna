<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmPerformanceTrack', 'doctrine');

/**
 * BaseOhrmPerformanceTrack
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $emp_number
 * @property string $tracker_name
 * @property timestamp $added_date
 * @property integer $added_by
 * @property integer $status
 * @property timestamp $modified_date
 * @property HsHrEmployee $HsHrEmployee
 * @property HsHrEmployee $HsHrEmployee_2
 * @property Doctrine_Collection $OhrmPerformanceTrackerLog
 * @property Doctrine_Collection $OhrmPerformanceTrackerReviewer
 * 
 * @method integer              getId()                             Returns the current record's "id" value
 * @method integer              getEmpNumber()                      Returns the current record's "emp_number" value
 * @method string               getTrackerName()                    Returns the current record's "tracker_name" value
 * @method timestamp            getAddedDate()                      Returns the current record's "added_date" value
 * @method integer              getAddedBy()                        Returns the current record's "added_by" value
 * @method integer              getStatus()                         Returns the current record's "status" value
 * @method timestamp            getModifiedDate()                   Returns the current record's "modified_date" value
 * @method HsHrEmployee         getHsHrEmployee()                   Returns the current record's "HsHrEmployee" value
 * @method HsHrEmployee         getHsHrEmployee2()                  Returns the current record's "HsHrEmployee_2" value
 * @method Doctrine_Collection  getOhrmPerformanceTrackerLog()      Returns the current record's "OhrmPerformanceTrackerLog" collection
 * @method Doctrine_Collection  getOhrmPerformanceTrackerReviewer() Returns the current record's "OhrmPerformanceTrackerReviewer" collection
 * @method OhrmPerformanceTrack setId()                             Sets the current record's "id" value
 * @method OhrmPerformanceTrack setEmpNumber()                      Sets the current record's "emp_number" value
 * @method OhrmPerformanceTrack setTrackerName()                    Sets the current record's "tracker_name" value
 * @method OhrmPerformanceTrack setAddedDate()                      Sets the current record's "added_date" value
 * @method OhrmPerformanceTrack setAddedBy()                        Sets the current record's "added_by" value
 * @method OhrmPerformanceTrack setStatus()                         Sets the current record's "status" value
 * @method OhrmPerformanceTrack setModifiedDate()                   Sets the current record's "modified_date" value
 * @method OhrmPerformanceTrack setHsHrEmployee()                   Sets the current record's "HsHrEmployee" value
 * @method OhrmPerformanceTrack setHsHrEmployee2()                  Sets the current record's "HsHrEmployee_2" value
 * @method OhrmPerformanceTrack setOhrmPerformanceTrackerLog()      Sets the current record's "OhrmPerformanceTrackerLog" collection
 * @method OhrmPerformanceTrack setOhrmPerformanceTrackerReviewer() Sets the current record's "OhrmPerformanceTrackerReviewer" collection
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmPerformanceTrack extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_performance_track');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
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
        $this->hasColumn('tracker_name', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('added_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('added_by', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('status', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('modified_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('HsHrEmployee', array(
             'local' => 'emp_number',
             'foreign' => 'emp_number'));

        $this->hasOne('HsHrEmployee as HsHrEmployee_2', array(
             'local' => 'added_by',
             'foreign' => 'emp_number'));

        $this->hasMany('OhrmPerformanceTrackerLog', array(
             'local' => 'id',
             'foreign' => 'performance_track_id'));

        $this->hasMany('OhrmPerformanceTrackerReviewer', array(
             'local' => 'id',
             'foreign' => 'performance_track_id'));
    }
}