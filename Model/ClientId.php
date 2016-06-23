<?php
 
namespace Vlad\Pay\Model;
 
use Magento\Framework\Model\AbstractModel;
 
class ClientId extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Vlad\Pay\Model\Resource\Pay');

    }