<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmJobInterviewAttachment', 'doctrine');

/**
 * BaseOhrmJobInterviewAttachment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $interview_id
 * @property string $file_name
 * @property string $file_type
 * @property integer $file_size
 * @property blob $file_content
 * @property integer $attachment_type
 * @property string $comment
 * @property OhrmJobInterview $OhrmJobInterview
 * 
 * @method integer                    getId()               Returns the current record's "id" value
 * @method integer                    getInterviewId()      Returns the current record's "interview_id" value
 * @method string                     getFileName()         Returns the current record's "file_name" value
 * @method string                     getFileType()         Returns the current record's "file_type" value
 * @method integer                    getFileSize()         Returns the current record's "file_size" value
 * @method blob                       getFileContent()      Returns the current record's "file_content" value
 * @method integer                    getAttachmentType()   Returns the current record's "attachment_type" value
 * @method string                     getComment()          Returns the current record's "comment" value
 * @method OhrmJobInterview           getOhrmJobInterview() Returns the current record's "OhrmJobInterview" value
 * @method OhrmJobInterviewAttachment setId()               Sets the current record's "id" value
 * @method OhrmJobInterviewAttachment setInterviewId()      Sets the current record's "interview_id" value
 * @method OhrmJobInterviewAttachment setFileName()         Sets the current record's "file_name" value
 * @method OhrmJobInterviewAttachment setFileType()         Sets the current record's "file_type" value
 * @method OhrmJobInterviewAttachment setFileSize()         Sets the current record's "file_size" value
 * @method OhrmJobInterviewAttachment setFileContent()      Sets the current record's "file_content" value
 * @method OhrmJobInterviewAttachment setAttachmentType()   Sets the current record's "attachment_type" value
 * @method OhrmJobInterviewAttachment setComment()          Sets the current record's "comment" value
 * @method OhrmJobInterviewAttachment setOhrmJobInterview() Sets the current record's "OhrmJobInterview" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmJobInterviewAttachment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_job_interview_attachment');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('interview_id', 'integer', 4, array(
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
        $this->hasColumn('comment', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('OhrmJobInterview', array(
             'local' => 'interview_id',
             'foreign' => 'id'));
    }
}