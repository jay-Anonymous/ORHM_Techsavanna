<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmUser', 'doctrine');

/**
 * BaseOhrmUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $user_role_id
 * @property integer $emp_number
 * @property string $user_name
 * @property string $user_password
 * @property integer $deleted
 * @property integer $status
 * @property timestamp $date_entered
 * @property timestamp $date_modified
 * @property integer $modified_user_id
 * @property integer $created_by
 * 
 * @method integer   getId()               Returns the current record's "id" value
 * @method integer   getUserRoleId()       Returns the current record's "user_role_id" value
 * @method integer   getEmpNumber()        Returns the current record's "emp_number" value
 * @method string    getUserName()         Returns the current record's "user_name" value
 * @method string    getUserPassword()     Returns the current record's "user_password" value
 * @method integer   getDeleted()          Returns the current record's "deleted" value
 * @method integer   getStatus()           Returns the current record's "status" value
 * @method timestamp getDateEntered()      Returns the current record's "date_entered" value
 * @method timestamp getDateModified()     Returns the current record's "date_modified" value
 * @method integer   getModifiedUserId()   Returns the current record's "modified_user_id" value
 * @method integer   getCreatedBy()        Returns the current record's "created_by" value
 * @method OhrmUser  setId()               Sets the current record's "id" value
 * @method OhrmUser  setUserRoleId()       Sets the current record's "user_role_id" value
 * @method OhrmUser  setEmpNumber()        Sets the current record's "emp_number" value
 * @method OhrmUser  setUserName()         Sets the current record's "user_name" value
 * @method OhrmUser  setUserPassword()     Sets the current record's "user_password" value
 * @method OhrmUser  setDeleted()          Sets the current record's "deleted" value
 * @method OhrmUser  setStatus()           Sets the current record's "status" value
 * @method OhrmUser  setDateEntered()      Sets the current record's "date_entered" value
 * @method OhrmUser  setDateModified()     Sets the current record's "date_modified" value
 * @method OhrmUser  setModifiedUserId()   Sets the current record's "modified_user_id" value
 * @method OhrmUser  setCreatedBy()        Sets the current record's "created_by" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_user');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('user_role_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('emp_number', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('user_name', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 40,
             ));
        $this->hasColumn('user_password', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
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
        $this->hasColumn('status', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('date_entered', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('date_modified', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('modified_user_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('created_by', 'integer', 4, array(
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