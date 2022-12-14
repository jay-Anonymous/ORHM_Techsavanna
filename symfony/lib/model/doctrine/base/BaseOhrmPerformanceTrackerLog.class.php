<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmPerformanceTrackerLog', 'doctrine');

/**
 * BaseOhrmPerformanceTrackerLog
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $performance_track_id
 * @property string $log
 * @property string $comment
 * @property integer $status
 * @property timestamp $added_date
 * @property timestamp $modified_date
 * @property integer $reviewer_id
 * @property string $achievement
 * @property integer $user_id
 * 
 * @method integer                   getId()                   Returns the current record's "id" value
 * @method integer                   getPerformanceTrackId()   Returns the current record's "performance_track_id" value
 * @method string                    getLog()                  Returns the current record's "log" value
 * @method string                    getComment()              Returns the current record's "comment" value
 * @method integer                   getStatus()               Returns the current record's "status" value
 * @method timestamp                 getAddedDate()            Returns the current record's "added_date" value
 * @method timestamp                 getModifiedDate()         Returns the current record's "modified_date" value
 * @method integer                   getReviewerId()           Returns the current record's "reviewer_id" value
 * @method string                    getAchievement()          Returns the current record's "achievement" value
 * @method integer                   getUserId()               Returns the current record's "user_id" value
 * @method OhrmPerformanceTrackerLog setId()                   Sets the current record's "id" value
 * @method OhrmPerformanceTrackerLog setPerformanceTrackId()   Sets the current record's "performance_track_id" value
 * @method OhrmPerformanceTrackerLog setLog()                  Sets the current record's "log" value
 * @method OhrmPerformanceTrackerLog setComment()              Sets the current record's "comment" value
 * @method OhrmPerformanceTrackerLog setStatus()               Sets the current record's "status" value
 * @method OhrmPerformanceTrackerLog setAddedDate()            Sets the current record's "added_date" value
 * @method OhrmPerformanceTrackerLog setModifiedDate()         Sets the current record's "modified_date" value
 * @method OhrmPerformanceTrackerLog setReviewerId()           Sets the current record's "reviewer_id" value
 * @method OhrmPerformanceTrackerLog setAchievement()          Sets the current record's "achievement" value
 * @method OhrmPerformanceTrackerLog setUserId()               Sets the current record's "user_id" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmPerformanceTrackerLog extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_performance_tracker_log');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('performance_track_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('log', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 150,
             ));
        $this->hasColumn('comment', 'string', 3000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 3000,
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
        $this->hasColumn('added_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
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
        $this->hasColumn('reviewer_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('achievement', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}