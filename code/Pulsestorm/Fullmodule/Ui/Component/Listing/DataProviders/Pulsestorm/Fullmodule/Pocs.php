<?php
namespace Pulsestorm\Fullmodule\Ui\Component\Listing\DataProviders\Pulsestorm\Fullmodule;


/**
 * Class Pocs
 */
class Pocs extends \Magento\Ui\DataProvider\AbstractDataProvider
{    
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \Pulsestorm\Fullmodule\Model\ResourceModel\Poc\CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
    }
}
