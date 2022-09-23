<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmCompositeDisplayField', 'doctrine');

/**
 * BaseOhrmCompositeDisplayField
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $composite_display_field_id
 * @property integer $report_group_id
 * @property string $name
 * @property string $label
 * @property string $field_alias
 * @property string $is_sortable
 * @property string $sort_order
 * @property string $sort_field
 * @property string $element_type
 * @property string $element_property
 * @property string $width
 * @property string $is_exportable
 * @property string $text_alignment_style
 * @property integer $is_value_list
 * @property integer $display_field_group_id
 * @property string $default_value
 * @property integer $is_encrypted
 * @property integer $is_meta
 * 
 * @method integer                   getCompositeDisplayFieldId()    Returns the current record's "composite_display_field_id" value
 * @method integer                   getReportGroupId()              Returns the current record's "report_group_id" value
 * @method string                    getName()                       Returns the current record's "name" value
 * @method string                    getLabel()                      Returns the current record's "label" value
 * @method string                    getFieldAlias()                 Returns the current record's "field_alias" value
 * @method string                    getIsSortable()                 Returns the current record's "is_sortable" value
 * @method string                    getSortOrder()                  Returns the current record's "sort_order" value
 * @method string                    getSortField()                  Returns the current record's "sort_field" value
 * @method string                    getElementType()                Returns the current record's "element_type" value
 * @method string                    getElementProperty()            Returns the current record's "element_property" value
 * @method string                    getWidth()                      Returns the current record's "width" value
 * @method string                    getIsExportable()               Returns the current record's "is_exportable" value
 * @method string                    getTextAlignmentStyle()         Returns the current record's "text_alignment_style" value
 * @method integer                   getIsValueList()                Returns the current record's "is_value_list" value
 * @method integer                   getDisplayFieldGroupId()        Returns the current record's "display_field_group_id" value
 * @method string                    getDefaultValue()               Returns the current record's "default_value" value
 * @method integer                   getIsEncrypted()                Returns the current record's "is_encrypted" value
 * @method integer                   getIsMeta()                     Returns the current record's "is_meta" value
 * @method OhrmCompositeDisplayField setCompositeDisplayFieldId()    Sets the current record's "composite_display_field_id" value
 * @method OhrmCompositeDisplayField setReportGroupId()              Sets the current record's "report_group_id" value
 * @method OhrmCompositeDisplayField setName()                       Sets the current record's "name" value
 * @method OhrmCompositeDisplayField setLabel()                      Sets the current record's "label" value
 * @method OhrmCompositeDisplayField setFieldAlias()                 Sets the current record's "field_alias" value
 * @method OhrmCompositeDisplayField setIsSortable()                 Sets the current record's "is_sortable" value
 * @method OhrmCompositeDisplayField setSortOrder()                  Sets the current record's "sort_order" value
 * @method OhrmCompositeDisplayField setSortField()                  Sets the current record's "sort_field" value
 * @method OhrmCompositeDisplayField setElementType()                Sets the current record's "element_type" value
 * @method OhrmCompositeDisplayField setElementProperty()            Sets the current record's "element_property" value
 * @method OhrmCompositeDisplayField setWidth()                      Sets the current record's "width" value
 * @method OhrmCompositeDisplayField setIsExportable()               Sets the current record's "is_exportable" value
 * @method OhrmCompositeDisplayField setTextAlignmentStyle()         Sets the current record's "text_alignment_style" value
 * @method OhrmCompositeDisplayField setIsValueList()                Sets the current record's "is_value_list" value
 * @method OhrmCompositeDisplayField setDisplayFieldGroupId()        Sets the current record's "display_field_group_id" value
 * @method OhrmCompositeDisplayField setDefaultValue()               Sets the current record's "default_value" value
 * @method OhrmCompositeDisplayField setIsEncrypted()                Sets the current record's "is_encrypted" value
 * @method OhrmCompositeDisplayField setIsMeta()                     Sets the current record's "is_meta" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmCompositeDisplayField extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_composite_display_field');
        $this->hasColumn('composite_display_field_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('report_group_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('name', 'string', 1000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1000,
             ));
        $this->hasColumn('label', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('field_alias', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('is_sortable', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('sort_order', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('sort_field', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('element_type', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('element_property', 'string', 1000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1000,
             ));
        $this->hasColumn('width', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('is_exportable', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('text_alignment_style', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('is_value_list', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('display_field_group_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('default_value', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('is_encrypted', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('is_meta', 'integer', 1, array(
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