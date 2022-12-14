<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('HsHrEmpAttachment', 'doctrine');

/**
 * BaseHsHrEmpAttachment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $emp_number
 * @property integer $eattach_id
 * @property string $eattach_desc
 * @property string $eattach_filename
 * @property integer $eattach_size
 * @property blob $eattach_attachment
 * @property string $eattach_type
 * @property string $screen
 * @property integer $attached_by
 * @property string $attached_by_name
 * @property timestamp $attached_time
 * @property HsHrEmployee $HsHrEmployee
 * 
 * @method integer           getEmpNumber()          Returns the current record's "emp_number" value
 * @method integer           getEattachId()          Returns the current record's "eattach_id" value
 * @method string            getEattachDesc()        Returns the current record's "eattach_desc" value
 * @method string            getEattachFilename()    Returns the current record's "eattach_filename" value
 * @method integer           getEattachSize()        Returns the current record's "eattach_size" value
 * @method blob              getEattachAttachment()  Returns the current record's "eattach_attachment" value
 * @method string            getEattachType()        Returns the current record's "eattach_type" value
 * @method string            getScreen()             Returns the current record's "screen" value
 * @method integer           getAttachedBy()         Returns the current record's "attached_by" value
 * @method string            getAttachedByName()     Returns the current record's "attached_by_name" value
 * @method timestamp         getAttachedTime()       Returns the current record's "attached_time" value
 * @method HsHrEmployee      getHsHrEmployee()       Returns the current record's "HsHrEmployee" value
 * @method HsHrEmpAttachment setEmpNumber()          Sets the current record's "emp_number" value
 * @method HsHrEmpAttachment setEattachId()          Sets the current record's "eattach_id" value
 * @method HsHrEmpAttachment setEattachDesc()        Sets the current record's "eattach_desc" value
 * @method HsHrEmpAttachment setEattachFilename()    Sets the current record's "eattach_filename" value
 * @method HsHrEmpAttachment setEattachSize()        Sets the current record's "eattach_size" value
 * @method HsHrEmpAttachment setEattachAttachment()  Sets the current record's "eattach_attachment" value
 * @method HsHrEmpAttachment setEattachType()        Sets the current record's "eattach_type" value
 * @method HsHrEmpAttachment setScreen()             Sets the current record's "screen" value
 * @method HsHrEmpAttachment setAttachedBy()         Sets the current record's "attached_by" value
 * @method HsHrEmpAttachment setAttachedByName()     Sets the current record's "attached_by_name" value
 * @method HsHrEmpAttachment setAttachedTime()       Sets the current record's "attached_time" value
 * @method HsHrEmpAttachment setHsHrEmployee()       Sets the current record's "HsHrEmployee" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHsHrEmpAttachment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_emp_attachment');
        $this->hasColumn('emp_number', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('eattach_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('eattach_desc', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('eattach_filename', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('eattach_size', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('eattach_attachment', 'blob', null, array(
             'type' => 'blob',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('eattach_type', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('screen', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('attached_by', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('attached_by_name', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('attached_time', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('HsHrEmployee', array(
             'local' => 'emp_number',
             'foreign' => 'emp_number'));
    }
}