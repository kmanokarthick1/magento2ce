<?php
namespace Pulsestorm\Fullmodule\Model\ResourceModel;

/**
 * Class Poc
 */
class Poc extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init('pulsestorm_fullmodule_poc', 'poc_id');
    }
}
