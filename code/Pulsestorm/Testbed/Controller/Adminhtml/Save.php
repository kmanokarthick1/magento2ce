<?php
namespace Pulsestorm\Testbed\Controller\Adminhtml\;

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
    const ADMIN_RESOURCE = 'Pulsestorm_Formexample::ruleName';

    /**
     * @var DataPersistorInterface
     */
    protected $dataPersistor;

    /**
     * @var \TestRepository
     */
    protected $objectRepository;

    /**
     * @param Action\Context $context
     * @param DataPersistorInterface $dataPersistor
     * @param \TestRepository $objectRepository
     */
    public function __construct(
        Action\Context $context,
        DataPersistorInterface $dataPersistor,
        \TestRepository $objectRepository
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
                $data['is_active'] = Test::STATUS_ENABLED;
            }
            if (empty($data['_id'])) {
                $data['_id'] = null;
            }

            /** @var \Test $model */
            $model = $this->_objectManager->create('Test');

            $id = $this->getRequest()->getParam('_id');
            if ($id) {
                $model = $this->objectRepository->getById($id);
            }

            $model->setData($data);

            try {
                $this->objectRepository->save($model);
                $this->messageManager->addSuccess(__('You saved the thing.'));
                $this->dataPersistor->clear('test_');
                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['_id' => $model->getId(), '_current' => true]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (LocalizedException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addException($e, __('Something went wrong while saving the data.'));
            }

            $this->dataPersistor->set('test_', $data);
            return $resultRedirect->setPath('*/*/edit', ['_id' => $this->getRequest()->getParam('_id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}
