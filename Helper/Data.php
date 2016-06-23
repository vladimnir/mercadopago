<?php
/**
 * Created by PhpStorm.
 * User: israel
 * Date: 10-03-16
 * Time: 10:45 AM
 */
namespace Vlad\Pay\Helper;
use \Magento\Framework\App\Helper\AbstractHelper;



class Data extends AbstractHelper {

    protected $_scopeConfig;
   

    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
        
    ){
        $this->_scopeConfig = $scopeConfig;
        
    }
    public function getToken(){
        return $this->_scopeConfig->getValue('payment/paymethod/clientse', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
    
   
   
    
    
  
    

 
}