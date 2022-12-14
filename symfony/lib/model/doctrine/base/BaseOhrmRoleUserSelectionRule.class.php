<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmRoleUserSelectionRule', 'doctrine');

/**
 * BaseOhrmRoleUserSelectionRule
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_role_id
 * @property integer $selection_rule_id
 * @property string $configurable_params
 * 
 * @method integer                   getUserRoleId()          Returns the current record's "user_role_id" value
 * @method integer                   getSelectionRuleId()     Returns the current record's "selection_rule_id" value
 * @method string                    getConfigurableParams()  Returns the current record's "configurable_params" value
 * @method OhrmRoleUserSelectionRule setUserRoleId()          Sets the current record's "user_role_id" value
 * @method OhrmRoleUserSelectionRule setSelectionRuleId()     Sets the current record's "selection_rule_id" value
 * @method OhrmRoleUserSelectionRule setConfigurableParams()  Sets the current record's "configurable_params" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmRoleUserSelectionRule extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_role_user_selection_rule');
        $this->hasColumn('user_role_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('selection_rule_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('configurable_params', 'string', null, array(
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