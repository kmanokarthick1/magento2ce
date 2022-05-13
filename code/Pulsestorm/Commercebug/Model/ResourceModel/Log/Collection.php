<?php
/**
* Copyright © Pulse Storm LLC 2016
* All rights reserved
*/
namespace Pulsestorm\Commercebug\Model\ResourceModel\Log;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Pulsestorm\Commercebug\Model\Log','Pulsestorm\Commercebug\Model\ResourceModel\Log');
    }
}
