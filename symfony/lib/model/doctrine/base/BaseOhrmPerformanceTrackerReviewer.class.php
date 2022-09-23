<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmPerformanceTrackerReviewer', 'doctrine');

/**
 * BaseOhrmPerformanceTrackerReviewer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $performance_track_id
 * @property integer $reviewer_id
 * @property timestamp $added_date
 * @property integer $status
 * 
 * @method integer                        getId()                   Returns the current record's "id" value
 * @method integer                        getPerformanceTrackId()   Returns the current record's "performance_track_id" value
 * @method integer                        getReviewerId()           Returns the current record's "reviewer_id" value
 * @method timestamp                      getAddedDate()            Returns the current record's "added_date" value
 * @method integer                        getStatus()               Returns the current record's "status" value
 * @method OhrmPerformanceTrackerReviewer setId()                   Sets the current record's "id" value
 * @method OhrmPerformanceTrackerReviewer setPerformanceTrackId()   Sets the current record's "performance_track_id" value
 * @method OhrmPerformanceTrackerReviewer setReviewerId()           Sets the current record's "reviewer_id" value
 * @method OhrmPerformanceTrackerReviewer setAddedDate()            Sets the current record's "added_date" value
 * @method OhrmPerformanceTrackerReviewer setStatus()               Sets the current record's "status" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmPerformanceTrackerReviewer extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_performance_tracker_reviewer');
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
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('reviewer_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
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
        $this->hasColumn('status', 'integer', 4, array(
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