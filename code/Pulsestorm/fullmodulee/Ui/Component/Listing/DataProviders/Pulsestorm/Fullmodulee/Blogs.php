<?php
namespace Pulsestorm\fullmodulee\Ui\Component\Listing\DataProviders\Pulsestorm\Fullmodulee;


/**
 * Class Blogs
 */
class Blogs extends \Magento\Ui\DataProvider\AbstractDataProvider
{    
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \Pulsestorm\fullmodulee\Model\ResourceModel\blog\CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
    }
}
