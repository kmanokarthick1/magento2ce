<?php
namespace Pulsestorm\Helloworld\Model;

/**
 * Class Thing
 */
class Thing extends \Magento\Framework\Model\AbstractModel implements
    \Pulsestorm\Helloworld\Api\Data\ThingInterface,
    \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'pulsestorm_helloworld_thing';

    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(\Pulsestorm\Helloworld\Model\ResourceModel\Thing::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
