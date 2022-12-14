<?php

/**
 * Ohrm_BankTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Ohrm_BankTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object Ohrm_BankTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Ohrm_Bank');
    }
    
       public static function getBanks() {
        try {
            return self::getInstance()->findAll();
        } catch (Exception $e) {
            throw new DaoException($e->getMessage());
        }
    }
    
    //hydrate
    public static function hydrateBanks() {
        try {
$deductions=  self::getInstance()->findAll();
foreach ($deductions as $deduction) {
    $choices[$deduction->getId()]=$deduction->getBankName();
}
return $choices;
        } catch (Exception $e) {
            throw new DaoException($e->getMessage());
        }
    }
    
    
    
    public static function getBankById($id) {
        try {
            return  self::getInstance()->find($id);
        } catch (Exception $e) {
            throw new DaoException($e->getMessage());
        }
    }  
    
     public static function deleteBank($id) {
        try {
             $deletequery=  self::getInstance()
  ->createQuery()
  ->delete()
  ->where(" `id`=$id")
  ->execute();
            return true;
        } catch (Exception $e) {
            throw new DaoException($e->getMessage());
        }
    }
    
}