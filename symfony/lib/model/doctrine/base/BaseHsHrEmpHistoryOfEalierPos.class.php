<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('HsHrEmpHistoryOfEalierPos', 'doctrine');

/**
 * BaseHsHrEmpHistoryOfEalierPos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $emp_number
 * @property decimal $emp_seqno
 * @property string $ehoep_job_title
 * @property string $ehoep_years
 * 
 * @method integer                   getEmpNumber()       Returns the current record's "emp_number" value
 * @method decimal                   getEmpSeqno()        Returns the current record's "emp_seqno" value
 * @method string                    getEhoepJobTitle()   Returns the current record's "ehoep_job_title" value
 * @method string                    getEhoepYears()      Returns the current record's "ehoep_years" value
 * @method HsHrEmpHistoryOfEalierPos setEmpNumber()       Sets the current record's "emp_number" value
 * @method HsHrEmpHistoryOfEalierPos setEmpSeqno()        Sets the current record's "emp_seqno" value
 * @method HsHrEmpHistoryOfEalierPos setEhoepJobTitle()   Sets the current record's "ehoep_job_title" value
 * @method HsHrEmpHistoryOfEalierPos setEhoepYears()      Sets the current record's "ehoep_years" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHsHrEmpHistoryOfEalierPos extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_emp_history_of_ealier_pos');
        $this->hasColumn('emp_number', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('emp_seqno', 'decimal', 2, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('ehoep_job_title', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('ehoep_years', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}