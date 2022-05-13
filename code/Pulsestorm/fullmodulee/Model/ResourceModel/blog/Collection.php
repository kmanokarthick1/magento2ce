<?php
namespace Pulsestorm\fullmodulee\Model\ResourceModel\blog;

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
            \Pulsestorm\fullmodulee\Model\blog::class,
            \Pulsestorm\fullmodulee\Model\ResourceModel\blog::class
        );
    }
}
