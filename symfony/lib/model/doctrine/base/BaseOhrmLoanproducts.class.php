<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmLoanproducts', 'doctrine');

/**
 * BaseOhrmLoanproducts
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $short_name
 * @property string $formula
 * @property float $interest_rate
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property string $amortization
 * @property integer $member_group
 * 
 * @method integer          getId()            Returns the current record's "id" value
 * @method string           getName()          Returns the current record's "name" value
 * @method string           getShortName()     Returns the current record's "short_name" value
 * @method string           getFormula()       Returns the current record's "formula" value
 * @method float            getInterestRate()  Returns the current record's "interest_rate" value
 * @method timestamp        getCreatedAt()     Returns the current record's "created_at" value
 * @method timestamp        getUpdatedAt()     Returns the current record's "updated_at" value
 * @method string           getAmortization()  Returns the current record's "amortization" value
 * @method integer          getMemberGroup()   Returns the current record's "member_group" value
 * @method OhrmLoanproducts setId()            Sets the current record's "id" value
 * @method OhrmLoanproducts setName()          Sets the current record's "name" value
 * @method OhrmLoanproducts setShortName()     Sets the current record's "short_name" value
 * @method OhrmLoanproducts setFormula()       Sets the current record's "formula" value
 * @method OhrmLoanproducts setInterestRate()  Sets the current record's "interest_rate" value
 * @method OhrmLoanproducts setCreatedAt()     Sets the current record's "created_at" value
 * @method OhrmLoanproducts setUpdatedAt()     Sets the current record's "updated_at" value
 * @method OhrmLoanproducts setAmortization()  Sets the current record's "amortization" value
 * @method OhrmLoanproducts setMemberGroup()   Sets the current record's "member_group" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmLoanproducts extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_loanproducts');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('short_name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('formula', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('interest_rate', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('amortization', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => 'EI',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('member_group', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}