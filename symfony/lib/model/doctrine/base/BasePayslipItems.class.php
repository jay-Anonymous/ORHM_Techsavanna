<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('PayslipItems', 'doctrine');

/**
 * BasePayslipItems
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $payslip_id
 * @property string $item_type
 * @property string $item_name
 * @property integer $amount
 * @property integer $is_deduction
 * @property integer $is_earning
 * @property integer $is_loan
 * @property string $emp_number
 * @property timestamp $datetime
 * 
 * @method integer      getId()           Returns the current record's "id" value
 * @method integer      getPayslipId()    Returns the current record's "payslip_id" value
 * @method string       getItemType()     Returns the current record's "item_type" value
 * @method string       getItemName()     Returns the current record's "item_name" value
 * @method integer      getAmount()       Returns the current record's "amount" value
 * @method integer      getIsDeduction()  Returns the current record's "is_deduction" value
 * @method integer      getIsEarning()    Returns the current record's "is_earning" value
 * @method integer      getIsLoan()       Returns the current record's "is_loan" value
 * @method string       getEmpNumber()    Returns the current record's "emp_number" value
 * @method timestamp    getDatetime()     Returns the current record's "datetime" value
 * @method PayslipItems setId()           Sets the current record's "id" value
 * @method PayslipItems setPayslipId()    Sets the current record's "payslip_id" value
 * @method PayslipItems setItemType()     Sets the current record's "item_type" value
 * @method PayslipItems setItemName()     Sets the current record's "item_name" value
 * @method PayslipItems setAmount()       Sets the current record's "amount" value
 * @method PayslipItems setIsDeduction()  Sets the current record's "is_deduction" value
 * @method PayslipItems setIsEarning()    Sets the current record's "is_earning" value
 * @method PayslipItems setIsLoan()       Sets the current record's "is_loan" value
 * @method PayslipItems setEmpNumber()    Sets the current record's "emp_number" value
 * @method PayslipItems setDatetime()     Sets the current record's "datetime" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePayslipItems extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('payslip_items');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('payslip_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('item_type', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('item_name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('amount', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('is_deduction', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('is_earning', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('is_loan', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('emp_number', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('datetime', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}