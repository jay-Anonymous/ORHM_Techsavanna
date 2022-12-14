<?php

/**
 * BaseCustomField
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property integer $type
 * @property string $screen
 * @property string $extraData
 * 
 * @method integer     getId()        Returns the current record's "id" value
 * @method string      getName()      Returns the current record's "name" value
 * @method integer     getType()      Returns the current record's "type" value
 * @method string      getScreen()    Returns the current record's "screen" value
 * @method string      getExtraData() Returns the current record's "extraData" value
 * @method CustomField setId()        Sets the current record's "id" value
 * @method CustomField setName()      Sets the current record's "name" value
 * @method CustomField setType()      Sets the current record's "type" value
 * @method CustomField setScreen()    Sets the current record's "screen" value
 * @method CustomField setExtraData() Sets the current record's "extraData" value
 * 
 * @package    orangehrm
 * @subpackage model\pim\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCustomField extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_custom_fields');
        $this->hasColumn('field_num as id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 250, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 250,
             ));
        $this->hasColumn('type', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('screen', 'string', 100, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 100,
             ));
        $this->hasColumn('extra_data as extraData', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}