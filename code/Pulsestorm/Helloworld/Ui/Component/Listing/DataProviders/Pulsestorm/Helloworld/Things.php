<?php
namespace Pulsestorm\Helloworld\Ui\Component\Listing\DataProviders\Pulsestorm\Helloworld;


/**
 * Class Things
 */
class Things extends \Magento\Ui\DataProvider\AbstractDataProvider
{    
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \Pulsestorm\Helloworld\Model\ResourceModel\Thing\CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
    }
}
