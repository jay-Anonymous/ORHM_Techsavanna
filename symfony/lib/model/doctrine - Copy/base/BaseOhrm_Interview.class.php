<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Ohrm_Interview', 'doctrine');

/**
 * BaseOhrm_Interview
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $candidate_first_name
  * @property string $candidate_middle_name
  * @property string $candidate_last_name
 * @property string $interviewer_name
 * @property string $interview_position
 * @property timestamp $interview_date
 * @property string $average_mark
  * @property string $status
 * 
 * @method integer        getId()                 Returns the current record's "id" value
 * @method string         getCandidateFirstName()      Returns the current record's "candidate_name" value
 * @method string         getCandidateMiddleName()      Returns the current record's "candidate_name" value
  * @method string         getCandidateLastName()      Returns the current record's "candidate_name" value
 * @method string         getInterviewerName()    Returns the current record's "interviewer_name" value
 * @method string         getInterviewPosition()  Returns the current record's "interview_position" value
 * @method timestamp      getInterviewDate()      Returns the current record's "interview_date" value
 * @method string         getAverageMark()        Returns the current record's "average_mark" value
 * @method string         getStatus()        Returns the current record's "average_mark" value
 * @method Ohrm_Interview setId()                 Sets the current record's "id" value
 * @method Ohrm_Interview setCandidateFirstName()      Sets the current record's "candidate_name" value
 *  @method Ohrm_Interview setCandidateMiddleName()      Sets the current record's "candidate_name" value
 *  @method Ohrm_Interview setCandidateLastName()      Sets the current record's "candidate_name" value
 * @method Ohrm_Interview setInterviewerName()    Sets the current record's "interviewer_name" value
 * @method Ohrm_Interview setInterviewPosition()  Sets the current record's "interview_position" value
 * @method Ohrm_Interview setInterviewDate()      Sets the current record's "interview_date" value
 * @method Ohrm_Interview setAverageMark()        Sets the current record's "average_mark" value
 * @method Ohrm_Interview setStatus()        Sets the current record's "average_mark" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrm_Interview extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('Ohrm_Interview');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('candidate_first_name', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('candidate_middle_name', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('candidate_last_name', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('interviewer_name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('status', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' =>20,
             ));
        $this->hasColumn('interview_position', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('interview_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('average_mark', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}