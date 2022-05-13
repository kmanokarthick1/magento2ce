<?php
namespace Pulsestorm\Fullmodule\Model;

/**
 * Class Poc
 */
class Poc extends \Magento\Framework\Model\AbstractModel implements
    \Pulsestorm\Fullmodule\Api\Data\PocInterface,
    \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'pulsestorm_fullmodule_poc';

    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(\Pulsestorm\Fullmodule\Model\ResourceModel\Poc::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
