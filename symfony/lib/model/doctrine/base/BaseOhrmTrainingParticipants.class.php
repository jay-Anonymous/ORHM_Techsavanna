<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmTrainingParticipants', 'doctrine');

/**
 * BaseOhrmTrainingParticipants
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $employee
 * @property integer $training_session
 * @property string $approved
 * @property integer $approved_by
 * @property string $recommendation
 * 
 * @method integer                  getId()               Returns the current record's "id" value
 * @method integer                  getEmployee()         Returns the current record's "employee" value
 * @method integer                  getTrainingSession()  Returns the current record's "training_session" value
 * @method string                   getApproved()         Returns the current record's "approved" value
 * @method integer                  getApprovedBy()       Returns the current record's "approved_by" value
 * @method string                   getRecommendation()   Returns the current record's "recommendation" value
 * @method OhrmTrainingParticipants setId()               Sets the current record's "id" value
 * @method OhrmTrainingParticipants setEmployee()         Sets the current record's "employee" value
 * @method OhrmTrainingParticipants setTrainingSession()  Sets the current record's "training_session" value
 * @method OhrmTrainingParticipants setApproved()         Sets the current record's "approved" value
 * @method OhrmTrainingParticipants setApprovedBy()       Sets the current record's "approved_by" value
 * @method OhrmTrainingParticipants setRecommendation()   Sets the current record's "recommendation" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmTrainingParticipants extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_training_participants');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('employee', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('training_session', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('approved', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('approved_by', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('recommendation', 'string', 500, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 500,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}