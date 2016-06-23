<?php
 
namespace Vlad\Pay\Model\Resource\Pay;
 
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
 
class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Vlad\Pay\Model\ClientId',
            'Vlad\Pay\Model\Resource\Pay'
        );
    }
}