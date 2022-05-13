<?php
namespace Pulsestorm\fullmodulee\Model\ResourceModel;

/**
 * Class blog
 */
class blog extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init('pulsestorm_fullmodulee_blog', 'blog_id');
    }
}
