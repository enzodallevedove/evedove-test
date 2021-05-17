<?php

namespace Evedove\Test\Controller\Test;

use Evedove\Test\Helper\Data as HelperData;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\CsrfAwareActionInterface;
use Magento\Framework\App\Request\InvalidRequestException;
use Magento\Framework\App\RequestInterface;

class Log implements ActionInterface, CsrfAwareActionInterface
{
    protected HelperData $helper;

    /**
     * Log constructor.
     * @param HelperData $helper
     */
    public function __construct(
        HelperData $helper
    )
    {
        $this->helper = $helper;
    }

    public function execute()
    {
        if (!$this->helper->isEnabled())
            return;

        $this->helper->log(__('Log every 10 minutes'));
    }

    /**
     * @param RequestInterface $request
     * @return InvalidRequestException|null
     */
    public function createCsrfValidationException(RequestInterface $request): ?InvalidRequestException
    {
        return null;
    }

    /**
     * @param RequestInterface $request
     * @return bool|null
     */
    public function validateForCsrf(RequestInterface $request): ?bool
    {
        return true;
    }
}
