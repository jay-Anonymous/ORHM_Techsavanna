<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmBenefits', 'doctrine');

/**
 * BaseOhrmBenefits
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property integer $taxable
 * @property integer $is_recurring
 * @property string $calculation_type
 * @property decimal $monthly_rate
 * @property decimal $annual_rate
 * @property integer $active
 * 
 * @method integer      getId()               Returns the current record's "id" value
 * @method string       getName()             Returns the current record's "name" value
 * @method integer      getTaxable()          Returns the current record's "taxable" value
 * @method integer      getIsRecurring()      Returns the current record's "is_recurring" value
 * @method string       getCalculationType()  Returns the current record's "calculation_type" value
 * @method decimal      getMonthlyRate()      Returns the current record's "monthly_rate" value
 * @method decimal      getAnnualRate()       Returns the current record's "annual_rate" value
 * @method integer      getActive()           Returns the current record's "active" value
 * @method OhrmBenefits setId()               Sets the current record's "id" value
 * @method OhrmBenefits setName()             Sets the current record's "name" value
 * @method OhrmBenefits setTaxable()          Sets the current record's "taxable" value
 * @method OhrmBenefits setIsRecurring()      Sets the current record's "is_recurring" value
 * @method OhrmBenefits setCalculationType()  Sets the current record's "calculation_type" value
 * @method OhrmBenefits setMonthlyRate()      Sets the current record's "monthly_rate" value
 * @method OhrmBenefits setAnnualRate()       Sets the current record's "annual_rate" value
 * @method OhrmBenefits setActive()           Sets the current record's "active" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmBenefits extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_benefits');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('taxable', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('is_recurring', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('calculation_type', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('monthly_rate', 'decimal', 10, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 10,
             'scale' => '2',
             ));
        $this->hasColumn('annual_rate', 'decimal', 10, array(
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