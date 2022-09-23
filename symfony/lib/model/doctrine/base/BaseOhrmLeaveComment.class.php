<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmLeaveComment', 'doctrine');

/**
 * BaseOhrmLeaveComment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $leave_id
 * @property timestamp $created
 * @property string $created_by_name
 * @property integer $created_by_id
 * @property integer $created_by_emp_number
 * @property string $comments
 * 
 * @method integer          getId()                    Returns the current record's "id" value
 * @method integer          getLeaveId()               Returns the current record's "leave_id" value
 * @method timestamp        getCreated()               Returns the current record's "created" value
 * @method string           getCreatedByName()         Returns the current record's "created_by_name" value
 * @method integer          getCreatedById()           Returns the current record's "created_by_id" value
 * @method integer          getCreatedByEmpNumber()    Returns the current record's "created_by_emp_number" value
 * @method string           getComments()              Returns the current record's "comments" value
 * @method OhrmLeaveComment setId()                    Sets the current record's "id" value
 * @method OhrmLeaveComment setLeaveId()               Sets the current record's "leave_id" value
 * @method OhrmLeaveComment setCreated()               Sets the current record's "created" value
 * @method OhrmLeaveComment setCreatedByName()         Sets the current record's "created_by_name" value
 * @method OhrmLeaveComment setCreatedById()           Sets the current record's "created_by_id" value
 * @method OhrmLeaveComment setCreatedByEmpNumber()    Sets the current record's "created_by_emp_number" value
 * @method OhrmLeaveComment setComments()              Sets the current record's "comments" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmLeaveComment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_leave_comment');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('leave_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('created', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('created_by_name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
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
        $this->hasColumn('created_by_emp_number', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('comments', 'string', 255, array(
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