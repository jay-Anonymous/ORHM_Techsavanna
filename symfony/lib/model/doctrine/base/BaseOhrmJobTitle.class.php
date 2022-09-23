<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmJobTitle', 'doctrine');

/**
 * BaseOhrmJobTitle
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $job_title
 * @property string $job_description
 * @property string $note
 * @property integer $is_deleted
 * @property Doctrine_Collection $HsHrEmployee
 * 
 * @method integer             getId()              Returns the current record's "id" value
 * @method string              getJobTitle()        Returns the current record's "job_title" value
 * @method string              getJobDescription()  Returns the current record's "job_description" value
 * @method string              getNote()            Returns the current record's "note" value
 * @method integer             getIsDeleted()       Returns the current record's "is_deleted" value
 * @method Doctrine_Collection getHsHrEmployee()    Returns the current record's "HsHrEmployee" collection
 * @method OhrmJobTitle        setId()              Sets the current record's "id" value
 * @method OhrmJobTitle        setJobTitle()        Sets the current record's "job_title" value
 * @method OhrmJobTitle        setJobDescription()  Sets the current record's "job_description" value
 * @method OhrmJobTitle        setNote()            Sets the current record's "note" value
 * @method OhrmJobTitle        setIsDeleted()       Sets the current record's "is_deleted" value
 * @method OhrmJobTitle        setHsHrEmployee()    Sets the current record's "HsHrEmployee" collection
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmJobTitle extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_job_title');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('job_title', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('job_description', 'string', 400, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 400,
             ));
        $this->hasColumn('note', 'string', 400, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 400,
             ));
        $this->hasColumn('is_deleted', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('HsHrEmployee', array(
             'local' => 'id',
             'foreign' => 'job_title_code'));
    }
}