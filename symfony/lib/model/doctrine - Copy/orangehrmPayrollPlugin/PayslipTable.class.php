<?php

/**
 * PayslipTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PayslipsTable extends PluginPayslipTable
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
    
    
       public static function deletePayslipsForMonth($yearmonth,$empno=""){
           if(!$empno){
          $q = Doctrine_Query :: create()
                            ->delete()
                            ->from('Payslip')
                  
                            ->where("DATE_FORMAT(`payslipdate`,'%Y-%m') = '$yearmonth'");
                 
           }
           else{
             $q = Doctrine_Query :: create()
                            ->delete()
                            ->from('Payslip')
                  
                            ->where("DATE_FORMAT(`payslipdate`,'%Y-%m') = '$yearmonth'")
                     ->andWhere("`emp_number`='$empno'");
           }
            $result=$q ->execute();  
                  if($result){
                      return TRUE;
                  }
                  else{
                      return FALSE;
                  }
       }
       
       
       public static function getEmpBasicSalary($empno,$monthyear){
            $q = Doctrine_Query :: create()
                            ->from('Payslip')
                  
                            ->where("DATE_FORMAT(`payslipdate`,'%m-%Y') = '$monthyear'")
                     ->andWhere("`emp_number`='$empno'");
           
            $result=$q ->fetchOne();  
                  if($result){
                     
                      return $result->getBasicPay();
                  }
                  else{
                      return 0;
                  }
       }
    
       public static function getEmpHouseAllowance($empno,$monthyear){
            $q = Doctrine_Query :: create()
                            ->from('Payslip')
                  
                            ->where("DATE_FORMAT(`payslipdate`,'%m-%Y') = '$monthyear'")
                     ->andWhere("`emp_number`='$empno'");
           
          $result=$q ->fetchOne();   
                  if($result){
                      return $result->getHouseAllowance();
                  }
                  else{
                      return 0;
                  }
       }
    
    
    
}