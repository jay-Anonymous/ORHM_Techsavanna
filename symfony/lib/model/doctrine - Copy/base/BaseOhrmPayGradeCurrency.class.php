<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmPayGradeCurrency', 'doctrine');

/**
 * BaseOhrmPayGradeCurrency
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $pay_grade_id
 * @property string $currency_id
 * @property float $min_salary
 * @property float $max_salary
 * @property HsHrCurrencyType $HsHrCurrencyType
 * @property OhrmPayGrade $OhrmPayGrade
 * 
 * @method integer              getPayGradeId()       Returns the current record's "pay_grade_id" value
 * @method string               getCurrencyId()       Returns the current record's "currency_id" value
 * @method float                getMinSalary()        Returns the current record's "min_salary" value
 * @method float                getMaxSalary()        Returns the current record's "max_salary" value
 * @method HsHrCurrencyType     getHsHrCurrencyType() Returns the current record's "HsHrCurrencyType" value
 * @method OhrmPayGrade         getOhrmPayGrade()     Returns the current record's "OhrmPayGrade" value
 * @method OhrmPayGradeCurrency setPayGradeId()       Sets the current record's "pay_grade_id" value
 * @method OhrmPayGradeCurrency setCurrencyId()       Sets the current record's "currency_id" value
 * @method OhrmPayGradeCurrency setMinSalary()        Sets the current record's "min_salary" value
 * @method OhrmPayGradeCurrency setMaxSalary()        Sets the current record's "max_salary" value
 * @method OhrmPayGradeCurrency setHsHrCurrencyType() Sets the current record's "HsHrCurrencyType" value
 * @method OhrmPayGradeCurrency setOhrmPayGrade()     Sets the current record's "OhrmPayGrade" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmPayGradeCurrency extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_pay_grade_currency');
        $this->hasColumn('pay_grade_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('currency_id', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('min_salary', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('max_salary', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('HsHrCurrencyType', array(
             'local' => 'currency_id',
             'foreign' => 'currency_id'));

        $this->hasOne('OhrmPayGrade', array(
             'local' => 'pay_grade_id',
             'foreign' => 'id'));
    }
}