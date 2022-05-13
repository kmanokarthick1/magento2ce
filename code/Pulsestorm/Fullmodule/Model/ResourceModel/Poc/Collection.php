<?php
namespace Pulsestorm\Fullmodule\Model\ResourceModel\Poc;

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
        $this->_init(
            \Pulsestorm\Fullmodule\Model\Poc::class,
            \Pulsestorm\Fullmodule\Model\ResourceModel\Poc::class
        );
    }
}
