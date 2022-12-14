<?php

/**
 * OhrmLoanrepaymentsTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class OhrmLoanrepaymentsTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object OhrmLoanrepaymentsTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('OhrmLoanrepayments');
    }
    
    public static function  getRepaymentsForMonth($loanaccount,$monthyear){
      
        $paymentss= Doctrine_Query::create()->select('sum(principal_paid)')->from ('OhrmLoanrepayments')->where ('loanaccount_id= ?',$loanaccount)->andWhere("DATE_FORMAT(`date`,'%m-%Y') = '$monthyear'");
	$result=$paymentss->execute(array(),  Doctrine::HYDRATE_SCALAR);
  
$payments=$result[0]['OhrmLoanrepayments_sum'];	

return $payments;
    }
     
    
    public static function deleteRepaymentForMonth($loanacct,$monthyear){
       
            $q = Doctrine_Query :: create()
                            ->delete()
                           ->from ('OhrmLoantransactions')->where ("`loanaccount_id`=$loanacct")->andWhere("DATE_FORMAT(`date`,'%m-%Y') = '$monthyear'")->andWhere("`issettlement`=0")
       
                   ->execute();
            
            
    }
    
    
    
}