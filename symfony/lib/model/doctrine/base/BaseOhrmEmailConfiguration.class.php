<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmEmailConfiguration', 'doctrine');

/**
 * BaseOhrmEmailConfiguration
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $mail_type
 * @property string $sent_as
 * @property string $sendmail_path
 * @property string $smtp_host
 * @property integer $smtp_port
 * @property string $smtp_username
 * @property string $smtp_password
 * @property string $smtp_auth_type
 * @property string $smtp_security_type
 * 
 * @method integer                getId()                 Returns the current record's "id" value
 * @method string                 getMailType()           Returns the current record's "mail_type" value
 * @method string                 getSentAs()             Returns the current record's "sent_as" value
 * @method string                 getSendmailPath()       Returns the current record's "sendmail_path" value
 * @method string                 getSmtpHost()           Returns the current record's "smtp_host" value
 * @method integer                getSmtpPort()           Returns the current record's "smtp_port" value
 * @method string                 getSmtpUsername()       Returns the current record's "smtp_username" value
 * @method string                 getSmtpPassword()       Returns the current record's "smtp_password" value
 * @method string                 getSmtpAuthType()       Returns the current record's "smtp_auth_type" value
 * @method string                 getSmtpSecurityType()   Returns the current record's "smtp_security_type" value
 * @method OhrmEmailConfiguration setId()                 Sets the current record's "id" value
 * @method OhrmEmailConfiguration setMailType()           Sets the current record's "mail_type" value
 * @method OhrmEmailConfiguration setSentAs()             Sets the current record's "sent_as" value
 * @method OhrmEmailConfiguration setSendmailPath()       Sets the current record's "sendmail_path" value
 * @method OhrmEmailConfiguration setSmtpHost()           Sets the current record's "smtp_host" value
 * @method OhrmEmailConfiguration setSmtpPort()           Sets the current record's "smtp_port" value
 * @method OhrmEmailConfiguration setSmtpUsername()       Sets the current record's "smtp_username" value
 * @method OhrmEmailConfiguration setSmtpPassword()       Sets the current record's "smtp_password" value
 * @method OhrmEmailConfiguration setSmtpAuthType()       Sets the current record's "smtp_auth_type" value
 * @method OhrmEmailConfiguration setSmtpSecurityType()   Sets the current record's "smtp_security_type" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmEmailConfiguration extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_email_configuration');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('mail_type', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('sent_as', 'string', 250, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 250,
             ));
        $this->hasColumn('sendmail_path', 'string', 250, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 250,
             ));
        $this->hasColumn('smtp_host', 'string', 250, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 250,
             ));
        $this->hasColumn('smtp_port', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('smtp_username', 'string', 250, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 250,
             ));
        $this->hasColumn('smtp_password', 'string', 250, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 250,
             ));
        $this->hasColumn('smtp_auth_type', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('smtp_security_type', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}