<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmEmployeeBenefits', 'doctrine');

/**
 * BaseOhrmEmployeeBenefits
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $benefit_id
 * @property string $emp_number
 * @property decimal $monthly_amount
  * @property date $begin_date
 * @property decimal $yearly_amount
 * @property integer $active
 * 
 * @method integer              getId()               Returns the current record's "id" value
 * @method integer              getBenefitId()        Returns the current record's "benefit_id" value
 * @method string               getEmpNumber()  Returns the current record's "calculation_type" value
 * @method string               getBeginDate()  Returns the current record's "calculation_type" value
 * @method decimal              getMonthlyAmount()    Returns the current record's "monthly_amount" value
 * @method decimal              getYearlyAmount()     Returns the current record's "yearly_amount" value
 * @method integer              getActive()           Returns the current record's "active" value
 * @method OhrmEmployeeBenefits setId()               Sets the current record's "id" value
 * @method OhrmEmployeeBenefits setBenefitId()        Sets the current record's "benefit_id" value
  * @method OhrmEmployeeBenefits setBeginDate()       Sets the current record's "annual_rate" value
  * @method OhrmEmployeeBenefits setEmpNumber()       Sets the current record's "annual_rate" value
 * @method OhrmEmployeeBenefits setMonthlyAmount()    Sets the current record's "monthly_amount" value
 * @method OhrmEmployeeBenefits setYearlyAmount()     Sets the current record's "yearly_amount" value
 * @method OhrmEmployeeBenefits setActive()           Sets the current record's "active" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmEmployeeBenefits extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_employee_benefits');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('benefit_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
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
       $this->hasColumn('begin_date', 'date', 20, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 20,
     
             ));
        $this->hasColumn('monthly_amount', 'decimal', 10, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 10,
             'scale' => '2',
             ));
        $this->hasColumn('yearly_amount', 'decimal', 10, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 10,
             'scale' => '2',
             ));
        $this->hasColumn('active', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
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