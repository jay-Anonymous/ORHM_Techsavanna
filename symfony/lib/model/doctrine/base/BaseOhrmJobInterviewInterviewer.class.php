<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmJobInterviewInterviewer', 'doctrine');

/**
 * BaseOhrmJobInterviewInterviewer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $interview_id
 * @property integer $interviewer_id
 * 
 * @method integer                     getInterviewId()    Returns the current record's "interview_id" value
 * @method integer                     getInterviewerId()  Returns the current record's "interviewer_id" value
 * @method OhrmJobInterviewInterviewer setInterviewId()    Sets the current record's "interview_id" value
 * @method OhrmJobInterviewInterviewer setInterviewerId()  Sets the current record's "interviewer_id" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmJobInterviewInterviewer extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_job_interview_interviewer');
        $this->hasColumn('interview_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('interviewer_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}