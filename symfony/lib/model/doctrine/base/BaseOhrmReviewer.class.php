<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmReviewer', 'doctrine');

/**
 * BaseOhrmReviewer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $review_id
 * @property integer $employee_number
 * @property integer $status
 * @property integer $reviewer_group_id
 * @property timestamp $completed_date
 * @property string $comment
 * 
 * @method integer      getId()                Returns the current record's "id" value
 * @method integer      getReviewId()          Returns the current record's "review_id" value
 * @method integer      getEmployeeNumber()    Returns the current record's "employee_number" value
 * @method integer      getStatus()            Returns the current record's "status" value
 * @method integer      getReviewerGroupId()   Returns the current record's "reviewer_group_id" value
 * @method timestamp    getCompletedDate()     Returns the current record's "completed_date" value
 * @method string       getComment()           Returns the current record's "comment" value
 * @method OhrmReviewer setId()                Sets the current record's "id" value
 * @method OhrmReviewer setReviewId()          Sets the current record's "review_id" value
 * @method OhrmReviewer setEmployeeNumber()    Sets the current record's "employee_number" value
 * @method OhrmReviewer setStatus()            Sets the current record's "status" value
 * @method OhrmReviewer setReviewerGroupId()   Sets the current record's "reviewer_group_id" value
 * @method OhrmReviewer setCompletedDate()     Sets the current record's "completed_date" value
 * @method OhrmReviewer setComment()           Sets the current record's "comment" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmReviewer extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_reviewer');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('review_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('employee_number', 'integer', 4, array(
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
        $this->hasColumn('reviewer_group_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('completed_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('comment', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}