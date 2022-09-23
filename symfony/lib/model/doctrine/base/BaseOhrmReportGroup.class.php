<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmReportGroup', 'doctrine');

/**
 * BaseOhrmReportGroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $report_group_id
 * @property string $name
 * @property string $core_sql
 * 
 * @method integer         getReportGroupId()   Returns the current record's "report_group_id" value
 * @method string          getName()            Returns the current record's "name" value
 * @method string          getCoreSql()         Returns the current record's "core_sql" value
 * @method OhrmReportGroup setReportGroupId()   Sets the current record's "report_group_id" value
 * @method OhrmReportGroup setName()            Sets the current record's "name" value
 * @method OhrmReportGroup setCoreSql()         Sets the current record's "core_sql" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmReportGroup extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_report_group');
        $this->hasColumn('report_group_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('core_sql', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}