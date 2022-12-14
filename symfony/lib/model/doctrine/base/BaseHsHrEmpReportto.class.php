<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('HsHrEmpReportto', 'doctrine');

/**
 * BaseHsHrEmpReportto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $erep_sup_emp_number
 * @property integer $erep_sub_emp_number
 * @property integer $erep_reporting_mode
 * 
 * @method integer         getErepSupEmpNumber()    Returns the current record's "erep_sup_emp_number" value
 * @method integer         getErepSubEmpNumber()    Returns the current record's "erep_sub_emp_number" value
 * @method integer         getErepReportingMode()   Returns the current record's "erep_reporting_mode" value
 * @method HsHrEmpReportto setErepSupEmpNumber()    Sets the current record's "erep_sup_emp_number" value
 * @method HsHrEmpReportto setErepSubEmpNumber()    Sets the current record's "erep_sub_emp_number" value
 * @method HsHrEmpReportto setErepReportingMode()   Sets the current record's "erep_reporting_mode" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHsHrEmpReportto extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_emp_reportto');
        $this->hasColumn('erep_sup_emp_number', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('erep_sub_emp_number', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('erep_reporting_mode', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}