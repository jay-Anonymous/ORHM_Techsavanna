<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('PayrollMonth', 'doctrine');

/**
 * BasePayrollMonth
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $payrollmonth
 * @property integer $active
 * 
 * @method integer      getId()           Returns the current record's "id" value
 * @method string       getPayrollmonth() Returns the current record's "payrollmonth" value
 * @method integer      getActive()       Returns the current record's "active" value
 * @method PayrollMonth setId()           Sets the current record's "id" value
 * @method PayrollMonth setPayrollmonth() Sets the current record's "payrollmonth" value
 * @method PayrollMonth setActive()       Sets the current record's "active" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePayrollMonth extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('payroll_month');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('payrollmonth', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('active', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}