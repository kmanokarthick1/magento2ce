<?php
namespace Pulsestorm\Testbed\Model;

/**
 * Class Test
 */
class Test extends \Magento\Framework\Model\AbstractModel implements
    \Pulsestorm\Testbed\Api\Data\TestInterface,
    \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'pulsestorm_testbed_test';

    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(\Pulsestorm\Testbed\Model\ResourceModel\Test::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
