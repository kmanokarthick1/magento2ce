<?php
namespace Pulsestorm\Testbed\Controller\Adminhtml\;


/**
 * Class Delete
 */
class Delete extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Pulsestorm_Formexample::ruleName';

    /**
     * @var \TestRepository
     */
    protected $objectRepository;

    /**
     * Delete constructor.
     * @param \TestRepository $objectRepository
     * @param \Magento\Backend\App\Action\Context $context
     */
    public function __construct(
        \TestRepository $objectRepository,
        \Magento\Backend\App\Action\Context $context
    ) {
        $this->objectRepository = $objectRepository;

        parent::__construct($context);
    }

    public function execute()
    {
        // check if we know what should be deleted
        $id = $this->getRequest()->getParam('object_id');
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                // delete model
                $this->objectRepository->deleteById($id);
                // display success message
                $this->messageManager->addSuccess(__('You have deleted the object.'));
                // go to grid
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                // display error message
                $this->messageManager->addError($e->getMessage());
                // go back to edit form
                return $resultRedirect->setPath('*/*/edit', ['_id' => $id]);
            }
        }
        // display error message
        $this->messageManager->addError(__('We can not find an object to delete.'));
        // go to grid
        return $resultRedirect->setPath('*/*/');

    }

}