<?php

/**
 * PayslipTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PayslipTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object PayslipTable
     */
    public static function getInstance()
    {
      
        return Doctrine_Core::getTable('Payslip');
    
    }
    
     public static function  getPayslipForMonth($empno,$month){
        
             $q = Doctrine_Query::create()
                            ->from('Payslip')
                         ->where(" `emp_number`= $empno")
  ->andWhere("DATE_FORMAT(`payslipdate`,'%m/%Y') = '$month'")
                    ->orderBy("emp_number ASC");
      //die($q);
         
      return $q->fetchOne();
    }
    
     public static function  getPayslipsForMonth($monthyear){
         
             $q = Doctrine_Query::create()
                            ->from('Payslip')
                         
  ->where("DATE_FORMAT(`payslipdate`,'%m-%Y') ='$monthyear'");
                   
           return $q->execute();
        
   
    }
    public static function  getLoanInterestFromPayslip($payslipid){
        $arrayloaninterest=array();
             $q = Doctrine_Query::create()
                            ->from('PayslipItems')
                         ->where(" `payslip_id`= $payslipid")
  ->andWhere("`item_name` like '%loan interest%'");
     $payslipitems=$q->fetchArray(); 
      if(is_array($payslipitems)){
        
      foreach ($payslipitems as $interest) {
          array_push($arrayloaninterest, $interest["amount"]) ;
      }
      return array_sum($arrayloaninterest);
      }
      else{
          return 0; 
      }
    }
      public static function  getPayslipsForYear($empno,$year){
         
             $q = Doctrine_Query::create()
                            ->from('Payslip')
                         ->where(" `emp_number`=$empno")
  ->andWhere("DATE_FORMAT(`payslipdate`,'%Y') like '%$year%'");
           
   
      return $q->fetchArray();
    }
    
     public static function  getNegativePayslipsForMonth($empno,$month){
             $q = Doctrine_Query::create()
                            ->from('Payslip')
                         ->where(" `emp_number`=$empno")
  ->andWhere("DATE_FORMAT(`payslipdate`,'%m/%Y') like '%$month%'")
             ->andWhere(" `net_pay` < 0 ");
            $q->execute();
        
      return $q->fetchOne();
    }
    
    //netpayless than
    public static function  getNetPayLessThanDeductions($empno,$month){
             $q = Doctrine_Query::create()
                            ->from('Payslip')
                         ->where(" `emp_number`=$empno")
  ->andWhere("DATE_FORMAT(`payslipdate`,'%m/%Y') like '%$month%'")
             ->andWhere(" `total_deductions` >`net_pay` ");
            $q->execute();
        
      return $q->fetchOne();
    }
    
    
    public static function getPayslipById($id){
        $payslip=self::getInstance()->findOneBy('id', $id);
        return $payslip;
    }
    
    //payslip deductions
       public static function  getPayslipDeductions($id){
         
             $q = Doctrine_Query::create()
                               ->from('PayslipItems')
                         ->where(" `payslip_id`= $id")
  ->andWhere("`is_deduction` =1");
     $payslipitems=$q->fetchArray(); 
           
   
      return $payslipitems;
    }
    
    
    
    
}