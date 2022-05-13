<?php
namespace Pulsestorm\Helloworld\Model\ResourceModel;

/**
 * Class Thing
 */
class Thing extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init('pulsestorm_helloworld_thing', 'thing_id');
    }
}
