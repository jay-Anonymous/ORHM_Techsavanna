<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmReviewerRating', 'doctrine');

/**
 * BaseOhrmReviewerRating
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property decimal $rating
 * @property integer $kpi_id
 * @property integer $review_id
 * @property integer $reviewer_id
 * @property string $comment
 * 
 * @method integer            getId()          Returns the current record's "id" value
 * @method decimal            getRating()      Returns the current record's "rating" value
 * @method integer            getKpiId()       Returns the current record's "kpi_id" value
 * @method integer            getReviewId()    Returns the current record's "review_id" value
 * @method integer            getReviewerId()  Returns the current record's "reviewer_id" value
 * @method string             getComment()     Returns the current record's "comment" value
 * @method OhrmReviewerRating setId()          Sets the current record's "id" value
 * @method OhrmReviewerRating setRating()      Sets the current record's "rating" value
 * @method OhrmReviewerRating setKpiId()       Sets the current record's "kpi_id" value
 * @method OhrmReviewerRating setReviewId()    Sets the current record's "review_id" value
 * @method OhrmReviewerRating setReviewerId()  Sets the current record's "reviewer_id" value
 * @method OhrmReviewerRating setComment()     Sets the current record's "comment" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmReviewerRating extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_reviewer_rating');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('rating', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 18,
             'scale' => '2',
             ));
        $this->hasColumn('kpi_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('review_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('reviewer_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('comment', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}