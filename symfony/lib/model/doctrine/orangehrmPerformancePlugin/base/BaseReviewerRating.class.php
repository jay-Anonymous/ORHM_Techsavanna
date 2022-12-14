<?php

/**
 * BaseReviewerRating
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property decimal $rating
 * @property integer $kpiId
 * @property integer $reviewId
 * @property integer $reviewerId
 * @property clob $comment
 * @property PerformanceReview $performanceReview
 * @property Reviewer $reviewer
 * @property Kpi $kpi
 * 
 * @method integer           getId()                Returns the current record's "id" value
 * @method decimal           getRating()            Returns the current record's "rating" value
 * @method integer           getKpiId()             Returns the current record's "kpiId" value
 * @method integer           getReviewId()          Returns the current record's "reviewId" value
 * @method integer           getReviewerId()        Returns the current record's "reviewerId" value
 * @method clob              getComment()           Returns the current record's "comment" value
 * @method PerformanceReview getPerformanceReview() Returns the current record's "performanceReview" value
 * @method Reviewer          getReviewer()          Returns the current record's "reviewer" value
 * @method Kpi               getKpi()               Returns the current record's "kpi" value
 * @method ReviewerRating    setId()                Sets the current record's "id" value
 * @method ReviewerRating    setRating()            Sets the current record's "rating" value
 * @method ReviewerRating    setKpiId()             Sets the current record's "kpiId" value
 * @method ReviewerRating    setReviewId()          Sets the current record's "reviewId" value
 * @method ReviewerRating    setReviewerId()        Sets the current record's "reviewerId" value
 * @method ReviewerRating    setComment()           Sets the current record's "comment" value
 * @method ReviewerRating    setPerformanceReview() Sets the current record's "performanceReview" value
 * @method ReviewerRating    setReviewer()          Sets the current record's "reviewer" value
 * @method ReviewerRating    setKpi()               Sets the current record's "kpi" value
 * 
 * @package    orangehrm
 * @subpackage model\performance\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseReviewerRating extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_reviewer_rating');
        $this->hasColumn('id', 'integer', 6, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 6,
             ));
        $this->hasColumn('rating as rating', 'decimal', null, array(
             'type' => 'decimal',
             'notnull' => false,
             ));
        $this->hasColumn('kpi_id as kpiId', 'integer', 11, array(
             'type' => 'integer',
             'length' => 11,
             ));
        $this->hasColumn('review_id as reviewId', 'integer', 11, array(
             'type' => 'integer',
             'length' => 11,
             ));
        $this->hasColumn('reviewer_id as reviewerId', 'integer', 11, array(
             'type' => 'integer',
             'length' => 11,
             ));
        $this->hasColumn('comment as comment', 'clob', 65532, array(
             'type' => 'clob',
             'length' => 65532,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('PerformanceReview as performanceReview', array(
             'local' => 'review_id',
             'foreign' => 'id'));

        $this->hasOne('Reviewer as reviewer', array(
             'local' => 'reviewer_id',
             'foreign' => 'id'));

        $this->hasOne('Kpi as kpi', array(
             'local' => 'kpi_id',
             'foreign' => 'id'));
    }
}