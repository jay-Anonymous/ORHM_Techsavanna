<?php

/**
 * OhrmTrainingCoursesTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class OhrmTrainingCoursesTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object OhrmTrainingCoursesTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('OhrmTrainingCourses');
    }
    
     public static function getAllCourses(){
        try {
        return Doctrine_Query::create()->from ('OhrmTrainingCourses')
             ->where(" `id` >0 ")->orderBy('course_title ASC')
      ->execute();
        } catch (Exception $e) {
            throw new DaoException($e->getMessage());
        }
    }
    
     public static function getCourse($id){
        return self::getInstance()->find($id);
    }
}