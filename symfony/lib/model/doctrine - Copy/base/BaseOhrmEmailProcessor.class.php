<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmEmailProcessor', 'doctrine');

/**
 * BaseOhrmEmailProcessor
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $email_id
 * @property string $class_name
 * @property OhrmEmail $OhrmEmail
 * 
 * @method integer            getId()         Returns the current record's "id" value
 * @method integer            getEmailId()    Returns the current record's "email_id" value
 * @method string             getClassName()  Returns the current record's "class_name" value
 * @method OhrmEmail          getOhrmEmail()  Returns the current record's "OhrmEmail" value
 * @method OhrmEmailProcessor setId()         Sets the current record's "id" value
 * @method OhrmEmailProcessor setEmailId()    Sets the current record's "email_id" value
 * @method OhrmEmailProcessor setClassName()  Sets the current record's "class_name" value
 * @method OhrmEmailProcessor setOhrmEmail()  Sets the current record's "OhrmEmail" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmEmailProcessor extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_email_processor');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('email_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('class_name', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('OhrmEmail', array(
             'local' => 'email_id',
             'foreign' => 'id'));
    }
}