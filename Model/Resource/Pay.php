<?php
 
namespace Vlad\Pay\Model\Resource;
 
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
 
class Pay extends AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('vlad_pay', 'clientid');
    }
}