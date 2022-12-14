<?php

/**
 * NssfTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DocumentsChecklistTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object NssfTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DocumentsChecklist');
    }
    public static function getConfiguration(){
    return self::getInstance()->find(1);
    }
    
     public static function getDocumentChecklist($document,$empnumber) {
      
$q = Doctrine_Query::create()
                            ->from('DocumentsChecklist')
                         ->where(" `emp_number`=$empnumber")
  ->andWhere("`document` like '$document'");
            $q->execute();
        
      return $q->fetchOne();
       
    }
    
}