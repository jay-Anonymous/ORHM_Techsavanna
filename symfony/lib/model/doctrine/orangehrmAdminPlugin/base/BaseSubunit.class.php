<?php

/**
 * BaseSubunit
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $unitId
 * @property string $description
 * @property Doctrine_Collection $PerformanceReview
 * @property Doctrine_Collection $Employee
 * 
 * @method integer             getId()                Returns the current record's "id" value
 * @method string              getName()              Returns the current record's "name" value
 * @method string              getUnitId()            Returns the current record's "unitId" value
 * @method string              getDescription()       Returns the current record's "description" value
 * @method Doctrine_Collection getPerformanceReview() Returns the current record's "PerformanceReview" collection
 * @method Doctrine_Collection getEmployee()          Returns the current record's "Employee" collection
 * @method Subunit             setId()                Sets the current record's "id" value
 * @method Subunit             setName()              Sets the current record's "name" value
 * @method Subunit             setUnitId()            Sets the current record's "unitId" value
 * @method Subunit             setDescription()       Sets the current record's "description" value
 * @method Subunit             setPerformanceReview() Sets the current record's "PerformanceReview" collection
 * @method Subunit             setEmployee()          Sets the current record's "Employee" collection
 * 
 * @package    orangehrm
 * @subpackage model\admin\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSubunit extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_subunit');
        $this->hasColumn('id', 'integer', 6, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 6,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('unit_id as unitId', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('description', 'string', 400, array(
             'type' => 'string',
             'length' => 400,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('PerformanceReview', array(
             'local' => 'id',
             'foreign' => 'departmentId'));

        $this->hasMany('Employee', array(
             'local' => 'id',
             'foreign' => 'work_station'));

        $nestedset0 = new Doctrine_Template_NestedSet(array(
             ));
        $this->actAs($nestedset0);
    }
}