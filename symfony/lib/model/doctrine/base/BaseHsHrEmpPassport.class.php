<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('HsHrEmpPassport', 'doctrine');

/**
 * BaseHsHrEmpPassport
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $emp_number
 * @property decimal $ep_seqno
 * @property string $ep_passport_num
 * @property timestamp $ep_passportissueddate
 * @property timestamp $ep_passportexpiredate
 * @property string $ep_comments
 * @property integer $ep_passport_type_flg
 * @property string $ep_i9_status
 * @property date $ep_i9_review_date
 * @property string $cou_code
 * 
 * @method integer         getEmpNumber()             Returns the current record's "emp_number" value
 * @method decimal         getEpSeqno()               Returns the current record's "ep_seqno" value
 * @method string          getEpPassportNum()         Returns the current record's "ep_passport_num" value
 * @method timestamp       getEpPassportissueddate()  Returns the current record's "ep_passportissueddate" value
 * @method timestamp       getEpPassportexpiredate()  Returns the current record's "ep_passportexpiredate" value
 * @method string          getEpComments()            Returns the current record's "ep_comments" value
 * @method integer         getEpPassportTypeFlg()     Returns the current record's "ep_passport_type_flg" value
 * @method string          getEpI9Status()            Returns the current record's "ep_i9_status" value
 * @method date            getEpI9ReviewDate()        Returns the current record's "ep_i9_review_date" value
 * @method string          getCouCode()               Returns the current record's "cou_code" value
 * @method HsHrEmpPassport setEmpNumber()             Sets the current record's "emp_number" value
 * @method HsHrEmpPassport setEpSeqno()               Sets the current record's "ep_seqno" value
 * @method HsHrEmpPassport setEpPassportNum()         Sets the current record's "ep_passport_num" value
 * @method HsHrEmpPassport setEpPassportissueddate()  Sets the current record's "ep_passportissueddate" value
 * @method HsHrEmpPassport setEpPassportexpiredate()  Sets the current record's "ep_passportexpiredate" value
 * @method HsHrEmpPassport setEpComments()            Sets the current record's "ep_comments" value
 * @method HsHrEmpPassport setEpPassportTypeFlg()     Sets the current record's "ep_passport_type_flg" value
 * @method HsHrEmpPassport setEpI9Status()            Sets the current record's "ep_i9_status" value
 * @method HsHrEmpPassport setEpI9ReviewDate()        Sets the current record's "ep_i9_review_date" value
 * @method HsHrEmpPassport setCouCode()               Sets the current record's "cou_code" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHsHrEmpPassport extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_emp_passport');
        $this->hasColumn('emp_number', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('ep_seqno', 'decimal', 2, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('ep_passport_num', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('ep_passportissueddate', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('ep_passportexpiredate', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('ep_comments', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('ep_passport_type_flg', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('ep_i9_status', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('ep_i9_review_date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('cou_code', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 6,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}