<?php

/**
 * BaseEmailNotification
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property integer $isEnable
 * @property Doctrine_Collection $EmailSubscriber
 * 
 * @method integer             getId()              Returns the current record's "id" value
 * @method string              getName()            Returns the current record's "name" value
 * @method integer             getIsEnable()        Returns the current record's "isEnable" value
 * @method Doctrine_Collection getEmailSubscriber() Returns the current record's "EmailSubscriber" collection
 * @method EmailNotification   setId()              Sets the current record's "id" value
 * @method EmailNotification   setName()            Sets the current record's "name" value
 * @method EmailNotification   setIsEnable()        Sets the current record's "isEnable" value
 * @method EmailNotification   setEmailSubscriber() Sets the current record's "EmailSubscriber" collection
 * 
 * @package    orangehrm
 * @subpackage model\admin\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEmailNotification extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_email_notification');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('is_enable as isEnable', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('EmailSubscriber', array(
             'local' => 'id',
             'foreign' => 'notificationId'));
    }
}