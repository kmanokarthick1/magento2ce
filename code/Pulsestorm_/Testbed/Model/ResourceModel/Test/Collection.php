<?php
namespace Pulsestorm\Testbed\Model\ResourceModel\Test;

/**
 * Class Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(\Pulsestorm\Testbed\Model\Test::class, \Pulsestorm\Testbed\Model\ResourceModel\Test::class);
    }
}
