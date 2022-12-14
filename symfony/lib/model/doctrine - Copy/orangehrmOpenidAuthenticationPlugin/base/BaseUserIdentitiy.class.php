<?php

/**
 * BaseUserIdentitiy
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property integer $provider_id
 * @property string $user_identity
 * @property OpenidProvider $OpenidProvider
 * 
 * @method integer        getUserId()         Returns the current record's "user_id" value
 * @method integer        getProviderId()     Returns the current record's "provider_id" value
 * @method string         getUserIdentity()   Returns the current record's "user_identity" value
 * @method OpenidProvider getOpenidProvider() Returns the current record's "OpenidProvider" value
 * @method UserIdentitiy  setUserId()         Sets the current record's "user_id" value
 * @method UserIdentitiy  setProviderId()     Sets the current record's "provider_id" value
 * @method UserIdentitiy  setUserIdentity()   Sets the current record's "user_identity" value
 * @method UserIdentitiy  setOpenidProvider() Sets the current record's "OpenidProvider" value
 * 
 * @package    orangehrm
 * @subpackage model\openidauthentication\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUserIdentitiy extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_openid_user_identity');
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('provider_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('user_identity', 'string', 2000, array(
             'type' => 'string',
             'length' => 2000,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('OpenidProvider', array(
             'local' => 'provider_id',
             'foreign' => 'id'));
    }
}