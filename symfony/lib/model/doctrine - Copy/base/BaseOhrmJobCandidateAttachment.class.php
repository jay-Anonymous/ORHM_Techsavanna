<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmJobCandidateAttachment', 'doctrine');

/**
 * BaseOhrmJobCandidateAttachment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $candidate_id
 * @property string $file_name
 * @property string $file_type
 * @property integer $file_size
 * @property blob $file_content
 * @property integer $attachment_type
 * @property OhrmJobCandidate $OhrmJobCandidate
 * 
 * @method integer                    getId()               Returns the current record's "id" value
 * @method integer                    getCandidateId()      Returns the current record's "candidate_id" value
 * @method string                     getFileName()         Returns the current record's "file_name" value
 * @method string                     getFileType()         Returns the current record's "file_type" value
 * @method integer                    getFileSize()         Returns the current record's "file_size" value
 * @method blob                       getFileContent()      Returns the current record's "file_content" value
 * @method integer                    getAttachmentType()   Returns the current record's "attachment_type" value
 * @method OhrmJobCandidate           getOhrmJobCandidate() Returns the current record's "OhrmJobCandidate" value
 * @method OhrmJobCandidateAttachment setId()               Sets the current record's "id" value
 * @method OhrmJobCandidateAttachment setCandidateId()      Sets the current record's "candidate_id" value
 * @method OhrmJobCandidateAttachment setFileName()         Sets the current record's "file_name" value
 * @method OhrmJobCandidateAttachment setFileType()         Sets the current record's "file_type" value
 * @method OhrmJobCandidateAttachment setFileSize()         Sets the current record's "file_size" value
 * @method OhrmJobCandidateAttachment setFileContent()      Sets the current record's "file_content" value
 * @method OhrmJobCandidateAttachment setAttachmentType()   Sets the current record's "attachment_type" value
 * @method OhrmJobCandidateAttachment setOhrmJobCandidate() Sets the current record's "OhrmJobCandidate" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmJobCandidateAttachment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_job_candidate_attachment');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('candidate_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('file_name', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('file_type', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('file_size', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('file_content', 'blob', null, array(
             'type' => 'blob',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('attachment_type', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('OhrmJobCandidate', array(
             'local' => 'candidate_id',
             'foreign' => 'id'));
    }
}