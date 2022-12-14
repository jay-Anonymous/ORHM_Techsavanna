<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('HsHrTempSalary', 'doctrine');

/**
 * BaseHsHrTempSalary
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $emp_number
 * @property integer $basic_pay
 * @property integer $house_allowance
 * 
 * @method integer        getId()              Returns the current record's "id" value
 * @method integer        getEmpNumber()       Returns the current record's "emp_number" value
 * @method integer        getBasicPay()        Returns the current record's "basic_pay" value
 * @method integer        getHouseAllowance()  Returns the current record's "house_allowance" value
 * @method HsHrTempSalary setId()              Sets the current record's "id" value
 * @method HsHrTempSalary setEmpNumber()       Sets the current record's "emp_number" value
 * @method HsHrTempSalary setBasicPay()        Sets the current record's "basic_pay" value
 * @method HsHrTempSalary setHouseAllowance()  Sets the current record's "house_allowance" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHsHrTempSalary extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_temp_salary');
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
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('basic_pay', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('house_allowance', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}