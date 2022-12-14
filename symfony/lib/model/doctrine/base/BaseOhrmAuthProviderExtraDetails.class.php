<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmAuthProviderExtraDetails', 'doctrine');

/**
 * BaseOhrmAuthProviderExtraDetails
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $provider_id
 * @property integer $provider_type
 * @property string $client_id
 * @property string $client_secret
 * @property string $developer_key
 * 
 * @method integer                      getId()            Returns the current record's "id" value
 * @method integer                      getProviderId()    Returns the current record's "provider_id" value
 * @method integer                      getProviderType()  Returns the current record's "provider_type" value
 * @method string                       getClientId()      Returns the current record's "client_id" value
 * @method string                       getClientSecret()  Returns the current record's "client_secret" value
 * @method string                       getDeveloperKey()  Returns the current record's "developer_key" value
 * @method OhrmAuthProviderExtraDetails setId()            Sets the current record's "id" value
 * @method OhrmAuthProviderExtraDetails setProviderId()    Sets the current record's "provider_id" value
 * @method OhrmAuthProviderExtraDetails setProviderType()  Sets the current record's "provider_type" value
 * @method OhrmAuthProviderExtraDetails setClientId()      Sets the current record's "client_id" value
 * @method OhrmAuthProviderExtraDetails setClientSecret()  Sets the current record's "client_secret" value
 * @method OhrmAuthProviderExtraDetails setDeveloperKey()  Sets the current record's "developer_key" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmAuthProviderExtraDetails extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_auth_provider_extra_details');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('provider_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('provider_type', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('client_id', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('client_secret', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('developer_key', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}