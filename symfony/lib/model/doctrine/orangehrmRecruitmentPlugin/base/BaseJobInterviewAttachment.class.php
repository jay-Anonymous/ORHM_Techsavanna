<?php

/**
 * BaseJobInterviewAttachment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $interviewId
 * @property string $fileName
 * @property string $fileType
 * @property integer $fileSize
 * @property blob $fileContent
 * @property integer $attachmentType
 * @property  $comment
 * @property JobInterview $JobInterview
 * 
 * @method integer                getId()             Returns the current record's "id" value
 * @method integer                getInterviewId()    Returns the current record's "interviewId" value
 * @method string                 getFileName()       Returns the current record's "fileName" value
 * @method string                 getFileType()       Returns the current record's "fileType" value
 * @method integer                getFileSize()       Returns the current record's "fileSize" value
 * @method blob                   getFileContent()    Returns the current record's "fileContent" value
 * @method integer                getAttachmentType() Returns the current record's "attachmentType" value
 * @method JobInterview           getJobInterview()   Returns the current record's "JobInterview" value
 * @method JobInterviewAttachment setId()             Sets the current record's "id" value
 * @method JobInterviewAttachment setInterviewId()    Sets the current record's "interviewId" value
 * @method JobInterviewAttachment setFileName()       Sets the current record's "fileName" value
 * @method JobInterviewAttachment setFileType()       Sets the current record's "fileType" value
 * @method JobInterviewAttachment setFileSize()       Sets the current record's "fileSize" value
 * @method JobInterviewAttachment setFileContent()    Sets the current record's "fileContent" value
 * @method JobInterviewAttachment setAttachmentType() Sets the current record's "attachmentType" value
 * @method JobInterviewAttachment setJobInterview()   Sets the current record's "JobInterview" value
 * 
 * @package    orangehrm
 * @subpackage model\recruitment\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJobInterviewAttachment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_job_interview_attachment');
        $this->hasColumn('id', 'integer', 13, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 13,
             ));
        $this->hasColumn('interview_id as interviewId', 'integer', 13, array(
             'type' => 'integer',
             'length' => 13,
             ));
        $this->hasColumn('file_name as fileName', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('file_type as fileType', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('file_size as fileSize', 'integer', 30, array(
             'type' => 'integer',
             'length' => 30,
             ));
        $this->hasColumn('file_content as fileContent', 'blob', 2147483647, array(
             'type' => 'blob',
             'length' => 2147483647,
             ));
        $this->hasColumn('attachment_type as attachmentType', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('comment', '', null);
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('JobInterview', array(
             'local' => 'interviewId',
             'foreign' => 'id'));
    }
}