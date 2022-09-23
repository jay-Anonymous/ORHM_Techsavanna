<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmEmail', 'doctrine');

/**
 * BaseOhrmEmail
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property Doctrine_Collection $OhrmEmailProcessor
 * @property Doctrine_Collection $OhrmEmailTemplate
 * 
 * @method integer             getId()                 Returns the current record's "id" value
 * @method string              getName()               Returns the current record's "name" value
 * @method Doctrine_Collection getOhrmEmailProcessor() Returns the current record's "OhrmEmailProcessor" collection
 * @method Doctrine_Collection getOhrmEmailTemplate()  Returns the current record's "OhrmEmailTemplate" collection
 * @method OhrmEmail           setId()                 Sets the current record's "id" value
 * @method OhrmEmail           setName()               Sets the current record's "name" value
 * @method OhrmEmail           setOhrmEmailProcessor() Sets the current record's "OhrmEmailProcessor" collection
 * @method OhrmEmail           setOhrmEmailTemplate()  Sets the current record's "OhrmEmailTemplate" collection
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmEmail extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_email');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('OhrmEmailProcessor', array(
             'local' => 'id',
             'foreign' => 'email_id'));

        $this->hasMany('OhrmEmailTemplate', array(
             'local' => 'id',
             'foreign' => 'email_id'));
    }
}