<?php
namespace Pulsestorm\Fullmodule\Controller\Adminhtml\Poc;

use Magento\Backend\App\Action;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Exception\LocalizedException;
            

/**
 * Class Save
 */
class Save extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Pulsestorm_Fullmodule::pocs';

    /**
     * @var DataPersistorInterface
     */
    protected $dataPersistor;

    /**
     * @var \Pulsestorm\Fullmodule\Model\PocRepository
     */
    protected $objectRepository;

    /**
     * @param Action\Context $context
     * @param DataPersistorInterface $dataPersistor
     * @param \Pulsestorm\Fullmodule\Model\PocRepository $objectRepository
     */
    public function __construct(
        Action\Context $context,
        DataPersistorInterface $dataPersistor,
        \Pulsestorm\Fullmodule\Model\PocRepository $objectRepository
    ) {
        $this->dataPersistor    = $dataPersistor;
        $this->objectRepository  = $objectRepository;

        parent::__construct($context);
    }

    /**
     * Save action
     *
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($data) {
            if (isset($data['is_active']) && $data['is_active'] === 'true') {
                $data['is_active'] = Pulsestorm\Fullmodule\Model\Poc::STATUS_ENABLED;
            }
            if (empty($data['poc_id'])) {
                $data['poc_id'] = null;
            }

            /** @var \Pulsestorm\Fullmodule\Model\Poc $model */
            $model = $this->_objectManager->create('Pulsestorm\Fullmodule\Model\Poc');

            $id = $this->getRequest()->getParam('poc_id');
            if ($id) {
                $model = $this->objectRepository->getById($id);
            }

            $model->setData($data);

            try {
                $this->objectRepository->save($model);
                $this->messageManager->addSuccess(__('You saved the thing.'));
                $this->dataPersistor->clear('pulsestorm_fullmodule_poc');
                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['poc_id' => $model->getId(), '_current' => true]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (LocalizedException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addException($e, __('Something went wrong while saving the data.'));
            }

            $this->dataPersistor->set('pulsestorm_fullmodule_poc', $data);
            return $resultRedirect->setPath('*/*/edit', ['poc_id' => $this->getRequest()->getParam('poc_id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}
