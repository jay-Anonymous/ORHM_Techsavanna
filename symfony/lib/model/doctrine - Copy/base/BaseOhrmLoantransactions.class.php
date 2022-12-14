<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmLoantransactions', 'doctrine');

/**
 * BaseOhrmLoantransactions
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $loanaccount_id
 * @property date $date
 * @property string $description
 * @property string $trans_no
 * @property float $amount
 * @property string $type
  * @property int $issettlement
  * @property string $payment_mode
  * @property string $cheque_no
  * @property string $cheque_details
  * @property date $cheque_date
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property OhrmLoanaccounts $OhrmLoanaccounts
 * 
 * @method integer              getId()               Returns the current record's "id" value
 * @method integer              getLoanaccountId()    Returns the current record's "loanaccount_id" value
 * @method integer              getIssettlement()    Returns the current record's "issettlement" value
 * @method date                 getDate()             Returns the current record's "date" value
 * @method string               getDescription()      Returns the current record's "description" value
 * @method string               getTransNo()          Returns the current record's "trans_no" value
 * @method float                getAmount()           Returns the current record's "amount" value
 * @method string               getType()             Returns the current record's "type" value
 * @method string               getPaymentMode()             Returns the current record's "type" value
 * @method date              getChequeDate()             Returns the current record's "type" value
 * @method string               getChequeNo()             Returns the current record's "type" value
 * @method string               getChequeDetails()             Returns the current record's "type" value
 * @method timestamp            getCreatedAt()        Returns the current record's "created_at" value
 * @method timestamp            getUpdatedAt()        Returns the current record's "updated_at" value
 * @method OhrmLoanaccounts     getOhrmLoanaccounts() Returns the current record's "OhrmLoanaccounts" value
 * @method OhrmLoantransactions setId()               Sets the current record's "id" value
 * @method OhrmLoantransactions setLoanaccountId()    Sets the current record's "loanaccount_id" value
 * @method OhrmLoantransactions setDate()             Sets the current record's "date" value
  * @method OhrmLoantransactions setPaymentMode()             Sets the current record's "date" value
 * @method OhrmLoantransactions setIssettlement()             Sets the current record's "date" value
  * @method OhrmLoantransactions setChequeDate()             Sets the current record's "date" value
  * @method OhrmLoantransactions setChequeNo()             Sets the current record's "date" value
  * @method OhrmLoantransactions setChequeDetails()             Sets the current record's "date" value
 * @method OhrmLoantransactions setDescription()      Sets the current record's "description" value
 * @method OhrmLoantransactions setTransNo()          Sets the current record's "trans_no" value
 * @method OhrmLoantransactions setAmount()           Sets the current record's "amount" value
 * @method OhrmLoantransactions setType()             Sets the current record's "type" value
 * @method OhrmLoantransactions setCreatedAt()        Sets the current record's "created_at" value
 * @method OhrmLoantransactions setUpdatedAt()        Sets the current record's "updated_at" value
 * @method OhrmLoantransactions setOhrmLoanaccounts() Sets the current record's "OhrmLoanaccounts" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmLoantransactions extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_loantransactions');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('loanaccount_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
             $this->hasColumn('issettlement', 'integer',1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => FALSE,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('trans_no', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('amount', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('payment_mode', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('cheque_no', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' =>FALSE,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('cheque_details', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' =>FALSE,
             'autoincrement' => false,
             'length' => 255,
             ));
         $this->hasColumn('cheque_date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' =>FALSE,
             'autoincrement' => false,
             'length' => 25,
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('OhrmLoanaccounts', array(
             'local' => 'loanaccount_id',
             'foreign' => 'id'));
    }
}