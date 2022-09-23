<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('HsHrEmpContractExtend', 'doctrine');

/**
 * BaseHsHrEmpContractExtend
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $emp_number
 * @property decimal $econ_extend_id
 * @property timestamp $econ_extend_start_date
 * @property timestamp $econ_extend_end_date
 * 
 * @method integer               getEmpNumber()              Returns the current record's "emp_number" value
 * @method decimal               getEconExtendId()           Returns the current record's "econ_extend_id" value
 * @method timestamp             getEconExtendStartDate()    Returns the current record's "econ_extend_start_date" value
 * @method timestamp             getEconExtendEndDate()      Returns the current record's "econ_extend_end_date" value
 * @method HsHrEmpContractExtend setEmpNumber()              Sets the current record's "emp_number" value
 * @method HsHrEmpContractExtend setEconExtendId()           Sets the current record's "econ_extend_id" value
 * @method HsHrEmpContractExtend setEconExtendStartDate()    Sets the current record's "econ_extend_start_date" value
 * @method HsHrEmpContractExtend setEconExtendEndDate()      Sets the current record's "econ_extend_end_date" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHsHrEmpContractExtend extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_emp_contract_extend');
        $this->hasColumn('emp_number', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('econ_extend_id', 'decimal', 10, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('econ_extend_start_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('econ_extend_end_date', 'timestamp', 25, array(
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
        
    }
}