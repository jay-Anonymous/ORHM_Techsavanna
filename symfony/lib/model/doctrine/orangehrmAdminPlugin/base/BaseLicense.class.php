<?php

/**
 * BaseLicense
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property Doctrine_Collection $EmployeeLicense
 * 
 * @method integer             getId()              Returns the current record's "id" value
 * @method string              getName()            Returns the current record's "name" value
 * @method Doctrine_Collection getEmployeeLicense() Returns the current record's "EmployeeLicense" collection
 * @method License             setId()              Sets the current record's "id" value
 * @method License             setName()            Sets the current record's "name" value
 * @method License             setEmployeeLicense() Sets the current record's "EmployeeLicense" collection
 * 
 * @package    orangehrm
 * @subpackage model\admin\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLicense extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_license');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('EmployeeLicense', array(
             'local' => 'id',
             'foreign' => 'license_id'));
    }
}