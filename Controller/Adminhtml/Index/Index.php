<?php
/**
 * # NOTICE OF LICENSE
 * This work is licensed under a ***Creative Commons Attribution-NonCommercial-
 * NoDerivs 3.0 Unported License*** http://creativecommons.org/licenses/by-nc-nd/3.0
 *
 * ## Authors
 * Objectwave_Mex Development Team
 * Iván Miranda @deivanmiranda
 */
namespace Obw\Hub\Controller\Adminhtml\Index;
class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;        
        return parent::__construct($context);
    }
    
    public function execute()
    {
        return $this->resultPageFactory->create();  
    }    
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('ACL RULE HERE');
    }            
        
}
