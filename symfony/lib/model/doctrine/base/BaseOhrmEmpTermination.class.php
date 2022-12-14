<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmEmpTermination', 'doctrine');

/**
 * BaseOhrmEmpTermination
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $emp_number
 * @property integer $reason_id
 * @property date $termination_date
 * @property string $note
 * @property Doctrine_Collection $HsHrEmployee
 * 
 * @method integer             getId()               Returns the current record's "id" value
 * @method integer             getEmpNumber()        Returns the current record's "emp_number" value
 * @method integer             getReasonId()         Returns the current record's "reason_id" value
 * @method date                getTerminationDate()  Returns the current record's "termination_date" value
 * @method string              getNote()             Returns the current record's "note" value
 * @method Doctrine_Collection getHsHrEmployee()     Returns the current record's "HsHrEmployee" collection
 * @method OhrmEmpTermination  setId()               Sets the current record's "id" value
 * @method OhrmEmpTermination  setEmpNumber()        Sets the current record's "emp_number" value
 * @method OhrmEmpTermination  setReasonId()         Sets the current record's "reason_id" value
 * @method OhrmEmpTermination  setTerminationDate()  Sets the current record's "termination_date" value
 * @method OhrmEmpTermination  setNote()             Sets the current record's "note" value
 * @method OhrmEmpTermination  setHsHrEmployee()     Sets the current record's "HsHrEmployee" collection
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmEmpTermination extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_emp_termination');
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
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('reason_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('termination_date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('note', 'string', 255, array(
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
        $this->hasMany('HsHrEmployee', array(
             'local' => 'id',
             'foreign' => 'termination_id'));
    }
}