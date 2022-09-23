<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('HsHrEmpdefaultpaymode', 'doctrine');

/**
 * BaseHsHrEmpdefaultpaymode
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $empnumber
 * @property string $paymentmethod

 * 
 * @method integer               getId()            Returns the current record's "id" value
 * @method string                getEmpnumber()     Returns the current record's "empnumber" value
 * @method integer               getPaymentmethod()          Returns the current record's "cash" value
 * 
 * 
 * @method HsHrEmpdefaultpaymode setId()            Sets the current record's "id" value
 * @method HsHrEmpdefaultpaymode setEmpnumber()     Sets the current record's "empnumber" value
 * @method HsHrEmpdefaultpaymode setPaymentmethod()          Sets the current record's "cash" value
 
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHsHrEmpdefaultpaymode extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_empdefaultpaymode');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('empnumber', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
          $this->hasColumn('paymentmethod', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}