<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmHoliday', 'doctrine');

/**
 * BaseOhrmHoliday
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $description
 * @property date $date
 * @property integer $recurring
 * @property integer $length
 * @property integer $operational_country_id
 * @property OhrmOperationalCountry $OhrmOperationalCountry
 * 
 * @method integer                getId()                     Returns the current record's "id" value
 * @method string                 getDescription()            Returns the current record's "description" value
 * @method date                   getDate()                   Returns the current record's "date" value
 * @method integer                getRecurring()              Returns the current record's "recurring" value
 * @method integer                getLength()                 Returns the current record's "length" value
 * @method integer                getOperationalCountryId()   Returns the current record's "operational_country_id" value
 * @method OhrmOperationalCountry getOhrmOperationalCountry() Returns the current record's "OhrmOperationalCountry" value
 * @method OhrmHoliday            setId()                     Sets the current record's "id" value
 * @method OhrmHoliday            setDescription()            Sets the current record's "description" value
 * @method OhrmHoliday            setDate()                   Sets the current record's "date" value
 * @method OhrmHoliday            setRecurring()              Sets the current record's "recurring" value
 * @method OhrmHoliday            setLength()                 Sets the current record's "length" value
 * @method OhrmHoliday            setOperationalCountryId()   Sets the current record's "operational_country_id" value
 * @method OhrmHoliday            setOhrmOperationalCountry() Sets the current record's "OhrmOperationalCountry" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmHoliday extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_holiday');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('recurring', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('length', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('operational_country_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('OhrmOperationalCountry', array(
             'local' => 'operational_country_id',
             'foreign' => 'id'));
    }
}