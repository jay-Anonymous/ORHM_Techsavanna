<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmEmpEducation', 'doctrine');

/**
 * BaseOhrmEmpEducation
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $emp_number
 * @property integer $education_id
 * @property string $institute
 * @property string $major
 * @property decimal $year
 * @property string $score
 * @property date $start_date
 * @property date $end_date
 * 
 * @method integer          getId()           Returns the current record's "id" value
 * @method integer          getEmpNumber()    Returns the current record's "emp_number" value
 * @method integer          getEducationId()  Returns the current record's "education_id" value
 * @method string           getInstitute()    Returns the current record's "institute" value
 * @method string           getMajor()        Returns the current record's "major" value
 * @method decimal          getYear()         Returns the current record's "year" value
 * @method string           getScore()        Returns the current record's "score" value
 * @method date             getStartDate()    Returns the current record's "start_date" value
 * @method date             getEndDate()      Returns the current record's "end_date" value
 * @method OhrmEmpEducation setId()           Sets the current record's "id" value
 * @method OhrmEmpEducation setEmpNumber()    Sets the current record's "emp_number" value
 * @method OhrmEmpEducation setEducationId()  Sets the current record's "education_id" value
 * @method OhrmEmpEducation setInstitute()    Sets the current record's "institute" value
 * @method OhrmEmpEducation setMajor()        Sets the current record's "major" value
 * @method OhrmEmpEducation setYear()         Sets the current record's "year" value
 * @method OhrmEmpEducation setScore()        Sets the current record's "score" value
 * @method OhrmEmpEducation setStartDate()    Sets the current record's "start_date" value
 * @method OhrmEmpEducation setEndDate()      Sets the current record's "end_date" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmEmpEducation extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_emp_education');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('emp_number', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('education_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('institute', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('major', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('year', 'decimal', 4, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('score', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('start_date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('end_date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}