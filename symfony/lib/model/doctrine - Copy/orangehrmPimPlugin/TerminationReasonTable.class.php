<?php

/**
 * TerminationReasonTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TerminationReasonTable extends PluginTerminationReasonTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TerminationReasonTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TerminationReason');
    }

     public static function  getTerminationReason($id){
             $q = Doctrine_Query::create()
                            ->from('TerminationReason')
                         ->where(" `id`=$id");
 
            $q->execute();
        
      return $q->fetchOne();
    }
}