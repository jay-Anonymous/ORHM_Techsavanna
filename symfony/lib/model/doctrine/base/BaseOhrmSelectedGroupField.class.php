<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmSelectedGroupField', 'doctrine');

/**
 * BaseOhrmSelectedGroupField
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $group_field_id
 * @property integer $summary_display_field_id
 * @property integer $report_id
 * 
 * @method integer                getGroupFieldId()             Returns the current record's "group_field_id" value
 * @method integer                getSummaryDisplayFieldId()    Returns the current record's "summary_display_field_id" value
 * @method integer                getReportId()                 Returns the current record's "report_id" value
 * @method OhrmSelectedGroupField setGroupFieldId()             Sets the current record's "group_field_id" value
 * @method OhrmSelectedGroupField setSummaryDisplayFieldId()    Sets the current record's "summary_display_field_id" value
 * @method OhrmSelectedGroupField setReportId()                 Sets the current record's "report_id" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmSelectedGroupField extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_selected_group_field');
        $this->hasColumn('group_field_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('summary_display_field_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('report_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}