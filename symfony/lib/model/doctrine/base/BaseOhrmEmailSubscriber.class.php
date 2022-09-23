<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmEmailSubscriber', 'doctrine');

/**
 * BaseOhrmEmailSubscriber
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $notification_id
 * @property string $name
 * @property string $email
 * 
 * @method integer             getId()              Returns the current record's "id" value
 * @method integer             getNotificationId()  Returns the current record's "notification_id" value
 * @method string              getName()            Returns the current record's "name" value
 * @method string              getEmail()           Returns the current record's "email" value
 * @method OhrmEmailSubscriber setId()              Sets the current record's "id" value
 * @method OhrmEmailSubscriber setNotificationId()  Sets the current record's "notification_id" value
 * @method OhrmEmailSubscriber setName()            Sets the current record's "name" value
 * @method OhrmEmailSubscriber setEmail()           Sets the current record's "email" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmEmailSubscriber extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_email_subscriber');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('notification_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
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
        $this->hasColumn('email', 'string', 100, array(
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
        
    }
}