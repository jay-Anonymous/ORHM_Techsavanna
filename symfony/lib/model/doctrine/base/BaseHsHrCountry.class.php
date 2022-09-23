<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('HsHrCountry', 'doctrine');

/**
 * BaseHsHrCountry
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $cou_code
 * @property string $name
 * @property string $cou_name
 * @property string $iso3
 * @property integer $numcode
 * 
 * @method string      getCouCode()  Returns the current record's "cou_code" value
 * @method string      getName()     Returns the current record's "name" value
 * @method string      getCouName()  Returns the current record's "cou_name" value
 * @method string      getIso3()     Returns the current record's "iso3" value
 * @method integer     getNumcode()  Returns the current record's "numcode" value
 * @method HsHrCountry setCouCode()  Sets the current record's "cou_code" value
 * @method HsHrCountry setName()     Sets the current record's "name" value
 * @method HsHrCountry setCouName()  Sets the current record's "cou_name" value
 * @method HsHrCountry setIso3()     Sets the current record's "iso3" value
 * @method HsHrCountry setNumcode()  Sets the current record's "numcode" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHsHrCountry extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_country');
        $this->hasColumn('cou_code', 'string', 2, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('name', 'string', 80, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 80,
             ));
        $this->hasColumn('cou_name', 'string', 80, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 80,
             ));
        $this->hasColumn('iso3', 'string', 3, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 3,
             ));
        $this->hasColumn('numcode', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 2,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}