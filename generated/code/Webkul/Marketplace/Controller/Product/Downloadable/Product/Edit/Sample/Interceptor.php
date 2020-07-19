<?php
namespace Webkul\Marketplace\Controller\Product\Downloadable\Product\Edit\Sample;

/**
 * Interceptor class for @see \Webkul\Marketplace\Controller\Product\Downloadable\Product\Edit\Sample
 */
class Interceptor extends \Webkul\Marketplace\Controller\Product\Downloadable\Product\Edit\Sample implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Webkul\Marketplace\Controller\Product\Builder $productBuilder, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Model\Url $customerUrl, \Webkul\Marketplace\Helper\Data $helper, \Webkul\Marketplace\Helper\Notification $notificationHelper, \Webkul\Marketplace\Model\ResourceModel\Product\CollectionFactory $productCollection, \Magento\Downloadable\Model\SampleFactory $sample, \Magento\Downloadable\Helper\File $fileHelper, \Magento\Downloadable\Helper\Download $downloadHelper, \Magento\Downloadable\Model\LinkFactory $linkModel)
    {
        $this->___init();
        parent::__construct($context, $productBuilder, $resultPageFactory, $customerSession, $customerUrl, $helper, $notificationHelper, $productCollection, $sample, $fileHelper, $downloadHelper, $linkModel);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
