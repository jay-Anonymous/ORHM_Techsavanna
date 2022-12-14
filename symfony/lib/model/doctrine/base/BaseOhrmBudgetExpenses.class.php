<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmBudgetExpenses', 'doctrine');

/**
 * BaseOhrmBudgetExpenses
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $budget
 * @property string $expense_category
 * @property string $description
 * @property string $amount
 * @property integer $requested_by
 * @property integer $approved_by
 * 
 * @method integer            getId()               Returns the current record's "id" value
 * @method integer            getBudget()           Returns the current record's "budget" value
 * @method string             getExpenseCategory()  Returns the current record's "expense_category" value
 * @method string             getDescription()      Returns the current record's "description" value
 * @method string             getAmount()           Returns the current record's "amount" value
 * @method integer            getRequestedBy()      Returns the current record's "requested_by" value
 * @method integer            getApprovedBy()       Returns the current record's "approved_by" value
 * @method OhrmBudgetExpenses setId()               Sets the current record's "id" value
 * @method OhrmBudgetExpenses setBudget()           Sets the current record's "budget" value
 * @method OhrmBudgetExpenses setExpenseCategory()  Sets the current record's "expense_category" value
 * @method OhrmBudgetExpenses setDescription()      Sets the current record's "description" value
 * @method OhrmBudgetExpenses setAmount()           Sets the current record's "amount" value
 * @method OhrmBudgetExpenses setRequestedBy()      Sets the current record's "requested_by" value
 * @method OhrmBudgetExpenses setApprovedBy()       Sets the current record's "approved_by" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmBudgetExpenses extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_budget_expenses');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('budget', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('expense_category', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('description', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('amount', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('requested_by', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('approved_by', 'integer', 4, array(
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