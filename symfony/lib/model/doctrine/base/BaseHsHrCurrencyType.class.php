<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('HsHrCurrencyType', 'doctrine');

/**
 * BaseHsHrCurrencyType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $code
 * @property string $currency_id
 * @property string $currency_name
 * @property Doctrine_Collection $HsHrEmpBasicsalary
 * 
 * @method integer             getCode()               Returns the current record's "code" value
 * @method string              getCurrencyId()         Returns the current record's "currency_id" value
 * @method string              getCurrencyName()       Returns the current record's "currency_name" value
 * @method Doctrine_Collection getHsHrEmpBasicsalary() Returns the current record's "HsHrEmpBasicsalary" collection
 * @method HsHrCurrencyType    setCode()               Sets the current record's "code" value
 * @method HsHrCurrencyType    setCurrencyId()         Sets the current record's "currency_id" value
 * @method HsHrCurrencyType    setCurrencyName()       Sets the current record's "currency_name" value
 * @method HsHrCurrencyType    setHsHrEmpBasicsalary() Sets the current record's "HsHrEmpBasicsalary" collection
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHsHrCurrencyType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_currency_type');
        $this->hasColumn('code', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('currency_id', 'string', 3, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 3,
             ));
        $this->hasColumn('currency_name', 'string', 70, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 70,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('HsHrEmpBasicsalary', array(
             'local' => 'currency_id',
             'foreign' => 'currency_id'));
    }
}