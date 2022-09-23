<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('HsHrEmpLanguage', 'doctrine');

/**
 * BaseHsHrEmpLanguage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $emp_number
 * @property integer $lang_id
 * @property integer $fluency
 * @property integer $competency
 * @property string $comments
 * @property HsHrEmployee $HsHrEmployee
 * @property OhrmLanguage $OhrmLanguage
 * 
 * @method integer         getEmpNumber()    Returns the current record's "emp_number" value
 * @method integer         getLangId()       Returns the current record's "lang_id" value
 * @method integer         getFluency()      Returns the current record's "fluency" value
 * @method integer         getCompetency()   Returns the current record's "competency" value
 * @method string          getComments()     Returns the current record's "comments" value
 * @method HsHrEmployee    getHsHrEmployee() Returns the current record's "HsHrEmployee" value
 * @method OhrmLanguage    getOhrmLanguage() Returns the current record's "OhrmLanguage" value
 * @method HsHrEmpLanguage setEmpNumber()    Sets the current record's "emp_number" value
 * @method HsHrEmpLanguage setLangId()       Sets the current record's "lang_id" value
 * @method HsHrEmpLanguage setFluency()      Sets the current record's "fluency" value
 * @method HsHrEmpLanguage setCompetency()   Sets the current record's "competency" value
 * @method HsHrEmpLanguage setComments()     Sets the current record's "comments" value
 * @method HsHrEmpLanguage setHsHrEmployee() Sets the current record's "HsHrEmployee" value
 * @method HsHrEmpLanguage setOhrmLanguage() Sets the current record's "OhrmLanguage" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHsHrEmpLanguage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_emp_language');
        $this->hasColumn('emp_number', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('lang_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('fluency', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('competency', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('comments', 'string', 100, array(
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
        $this->hasOne('HsHrEmployee', array(
             'local' => 'emp_number',
             'foreign' => 'emp_number'));

        $this->hasOne('OhrmLanguage', array(
             'local' => 'lang_id',
             'foreign' => 'id'));
    }
}