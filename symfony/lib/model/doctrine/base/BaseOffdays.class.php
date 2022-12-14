<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Offdays', 'doctrine');

/**
 * BaseOffdays
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $employee_id
 * @property string $off_day
 * @property integer $active
 * 
 * @method integer getId()          Returns the current record's "id" value
 * @method integer getEmployeeId()  Returns the current record's "employee_id" value
 * @method string  getOffDay()      Returns the current record's "off_day" value
 * @method integer getActive()      Returns the current record's "active" value
 * @method Offdays setId()          Sets the current record's "id" value
 * @method Offdays setEmployeeId()  Sets the current record's "employee_id" value
 * @method Offdays setOffDay()      Sets the current record's "off_day" value
 * @method Offdays setActive()      Sets the current record's "active" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOffdays extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('offdays');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('employee_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('off_day', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('active', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}