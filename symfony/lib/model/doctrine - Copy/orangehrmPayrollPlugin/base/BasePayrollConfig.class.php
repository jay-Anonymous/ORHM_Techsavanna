<?php

/**
 * BasePayrollConfig
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property decimal $personal_relief
 * @property decimal $insurance_relief
 * @property decimal $qualifying_relief
 * @property decimal $spouse_relief
 * @property decimal $other_relief
  * @property string $daily_rate
  * @property string $hourly_rate
 * 
 * @method integer       getId()                Returns the current record's "id" value
 * @method decimal       getPersonalRelief()    Returns the current record's "personal_relief" value
 * @method decimal       getInsuranceRelief()   Returns the current record's "insurance_relief" value
 * @method decimal       getQualifyingRelief()  Returns the current record's "qualifying_relief" value
 * @method decimal       getSpouseRelief()      Returns the current record's "spouse_relief" value
 * @method decimal       getOtherRelief()       Returns the current record's "other_relief" value
  * @method string           getDailyRate()       Returns the current record's "other_relief" value
  * @method decimal           getHourlyRate()       Returns the current record's "other_relief" value
 * @method PayrollConfig setId()                Sets the current record's "id" value
 * @method PayrollConfig setPersonalRelief()    Sets the current record's "personal_relief" value
 * @method PayrollConfig setInsuranceRelief()   Sets the current record's "insurance_relief" value
 * @method PayrollConfig setQualifyingRelief()  Sets the current record's "qualifying_relief" value
 * @method PayrollConfig setSpouseRelief()      Sets the current record's "spouse_relief" value
 * @method PayrollConfig setOtherRelief()       Sets the current record's "other_relief" value
   * @method Payrollconfig setDailyRate()       Sets the current record's "other_relief" value
   * @method Payrollconfig setHourlyRate()       Sets the current record's "other_relief" value
 * 
 * @package    orangehrm
 * @subpackage model\payroll\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePayrollConfig extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_payrollconfig');
        $this->hasColumn('id', 'integer', 11, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 11,
             ));
        $this->hasColumn('personal_relief', 'decimal', 6, array(
             'type' => 'decimal',
             'scale' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('insurance_relief', 'decimal', 6, array(
             'type' => 'decimal',
             'scale' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('qualifying_relief', 'decimal', 6, array(
             'type' => 'decimal',
             'scale' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('spouse_relief', 'decimal', 6, array(
             'type' => 'decimal',
             'scale' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('other_relief', 'decimal', 6, array(
             'type' => 'decimal',
             'scale' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 6,
             ));
         $this->hasColumn('daily_rate', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' =>255
             ));
         $this->hasColumn('hourly_rate', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' =>255
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}