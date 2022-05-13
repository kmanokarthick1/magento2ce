<?php
namespace Pulsestorm\Helloworld\Model\ResourceModel\Thing;

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
            \Pulsestorm\Helloworld\Model\Thing::class,
            \Pulsestorm\Helloworld\Model\ResourceModel\Thing::class
        );
    }
}
