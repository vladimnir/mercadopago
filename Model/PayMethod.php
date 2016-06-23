<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Vlad\Pay\Model;



/**
 * Pay In Store payment method model
 */
class PayMethod extends \Magento\Payment\Model\Method\AbstractMethod
{

    /**
     * Payment code
     *
     * @var string
     */
    protected $_code = 'paymethod';
    

    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = true;


  

}
