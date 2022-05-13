<?php
namespace Pulsestorm\fullmodulee\Model;

/**
 * Class blog
 */
class blog extends \Magento\Framework\Model\AbstractModel implements
    \Pulsestorm\fullmodulee\Api\Data\blogInterface,
    \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'pulsestorm_fullmodulee_blog';

    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(\Pulsestorm\fullmodulee\Model\ResourceModel\blog::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
