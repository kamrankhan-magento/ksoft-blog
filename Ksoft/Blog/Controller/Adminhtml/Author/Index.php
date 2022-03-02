<?php

namespace Ksoft\Blog\Controller\Adminhtml\Author;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

/**
 * Index action
 */
class Index extends Action implements HttpGetActionInterface
{

    const ADMIN_RESOURCE = 'Ksoft_Blog::ksoft_blog_author';

    private PageFactory $pageFactory;

    /**
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(Context $context, PageFactory $pageFactory)
     {
         $this->pageFactory = $pageFactory;
         parent::__construct($context);
     }

    /**
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->pageFactory->create();
        $resultPage->setActiveMenu('Ksoft_Blog::ksoft_blog_author');
        $resultPage->addBreadcrumb(__('BLOG'), __('BLOG'));
        $resultPage->addBreadcrumb(__('Authors'), __('Authors'));
        $resultPage->getConfig()->getTitle()->prepend(__('Authors'));

        return $resultPage;
    }
}
