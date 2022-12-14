<?php

/**
 * OhrmSubunitTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class OhrmSubunitTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object OhrmSubunitTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('OhrmSubunit');
    }
    
     public static function getAllDepartments(){
        try {
        return Doctrine_Query::create()->from ('OhrmSubunit')
             ->where(" `level`> 0")
      ->execute();
        } catch (Exception $e) {
            throw new DaoException($e->getMessage());
        }
    }
    
    
    
    public static function getDepartment($id){
        return self::getInstance()->find($id);
    }
}