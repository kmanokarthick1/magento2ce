<?php
/**
* Copyright © Pulse Storm LLC 2016
* All rights reserved
*/
namespace Pulsestorm\Commercebug\Observers;
class Model extends AbstractObserver
{
    protected function _execute(\Magento\Framework\Event\Observer $observer)
    {
        return $this->getModelInformation($observer);
    }
    
    public function getModelInformation($observer)
    {
        \Pulsestorm\Commercebug\Model\All::addTo('models', $observer->getObject());
    }
}