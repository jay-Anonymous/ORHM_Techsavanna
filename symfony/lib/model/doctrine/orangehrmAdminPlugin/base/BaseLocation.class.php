<?php

/**
 * BaseLocation
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $countryCode
 * @property string $province
 * @property string $city
 * @property string $address
 * @property string $zipCode
 * @property string $phone
 * @property string $fax
 * @property string $notes
 * @property Doctrine_Collection $employees
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method string              getName()        Returns the current record's "name" value
 * @method string              getCountryCode() Returns the current record's "countryCode" value
 * @method string              getProvince()    Returns the current record's "province" value
 * @method string              getCity()        Returns the current record's "city" value
 * @method string              getAddress()     Returns the current record's "address" value
 * @method string              getZipCode()     Returns the current record's "zipCode" value
 * @method string              getPhone()       Returns the current record's "phone" value
 * @method string              getFax()         Returns the current record's "fax" value
 * @method string              getNotes()       Returns the current record's "notes" value
 * @method Doctrine_Collection getEmployees()   Returns the current record's "employees" collection
 * @method Location            setId()          Sets the current record's "id" value
 * @method Location            setName()        Sets the current record's "name" value
 * @method Location            setCountryCode() Sets the current record's "countryCode" value
 * @method Location            setProvince()    Sets the current record's "province" value
 * @method Location            setCity()        Sets the current record's "city" value
 * @method Location            setAddress()     Sets the current record's "address" value
 * @method Location            setZipCode()     Sets the current record's "zipCode" value
 * @method Location            setPhone()       Sets the current record's "phone" value
 * @method Location            setFax()         Sets the current record's "fax" value
 * @method Location            setNotes()       Sets the current record's "notes" value
 * @method Location            setEmployees()   Sets the current record's "employees" collection
 * 
 * @package    orangehrm
 * @subpackage model\admin\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLocation extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_location');
        $this->hasColumn('id', 'integer', 13, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 13,
             ));
        $this->hasColumn('name', 'string', 110, array(
             'type' => 'string',
             'length' => 110,
             ));
        $this->hasColumn('country_code as countryCode', 'string', 3, array(
             'type' => 'string',
             'length' => 3,
             ));
        $this->hasColumn('province', 'string', 60, array(
             'type' => 'string',
             'length' => 60,
             ));
        $this->hasColumn('city', 'string', 60, array(
             'type' => 'string',
             'length' => 60,
             ));
        $this->hasColumn('address', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('zip_code as zipCode', 'string', 35, array(
             'type' => 'string',
             'length' => 35,
             ));
        $this->hasColumn('phone', 'string', 35, array(
             'type' => 'string',
             'length' => 35,
             ));
        $this->hasColumn('fax', 'string', 35, array(
             'type' => 'string',
             'length' => 35,
             ));
        $this->hasColumn('notes', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Employee as employees', array(
             'refClass' => 'EmpLocations',
             'local' => 'location_id',
             'foreign' => 'emp_number'));
    }
}