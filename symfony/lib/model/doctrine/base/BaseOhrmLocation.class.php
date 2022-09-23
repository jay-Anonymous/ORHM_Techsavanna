<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmLocation', 'doctrine');

/**
 * BaseOhrmLocation
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $country_code
 * @property string $province
 * @property string $city
 * @property string $address
 * @property string $zip_code
 * @property string $phone
 * @property string $fax
 * @property string $notes
 * 
 * @method integer      getId()           Returns the current record's "id" value
 * @method string       getName()         Returns the current record's "name" value
 * @method string       getCountryCode()  Returns the current record's "country_code" value
 * @method string       getProvince()     Returns the current record's "province" value
 * @method string       getCity()         Returns the current record's "city" value
 * @method string       getAddress()      Returns the current record's "address" value
 * @method string       getZipCode()      Returns the current record's "zip_code" value
 * @method string       getPhone()        Returns the current record's "phone" value
 * @method string       getFax()          Returns the current record's "fax" value
 * @method string       getNotes()        Returns the current record's "notes" value
 * @method OhrmLocation setId()           Sets the current record's "id" value
 * @method OhrmLocation setName()         Sets the current record's "name" value
 * @method OhrmLocation setCountryCode()  Sets the current record's "country_code" value
 * @method OhrmLocation setProvince()     Sets the current record's "province" value
 * @method OhrmLocation setCity()         Sets the current record's "city" value
 * @method OhrmLocation setAddress()      Sets the current record's "address" value
 * @method OhrmLocation setZipCode()      Sets the current record's "zip_code" value
 * @method OhrmLocation setPhone()        Sets the current record's "phone" value
 * @method OhrmLocation setFax()          Sets the current record's "fax" value
 * @method OhrmLocation setNotes()        Sets the current record's "notes" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmLocation extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_location');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 110, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 110,
             ));
        $this->hasColumn('country_code', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 3,
             ));
        $this->hasColumn('province', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('city', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('address', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('zip_code', 'string', 35, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 35,
             ));
        $this->hasColumn('phone', 'string', 35, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 35,
             ));
        $this->hasColumn('fax', 'string', 35, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 35,
             ));
        $this->hasColumn('notes', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}