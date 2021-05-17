<?php

namespace Evedove\Test\Observer;

use Evedove\Test\Helper\Data as HelperData;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

/**
 * Class CreateEvedoveOrderObserver
 * @package Evedove\Test\Observer
 */
class CreateEvedoveOrderObserver implements ObserverInterface
{
    /**
     * @var HelperData
     */
    protected HelperData $helper;

    /**
     * CreateEvedoveOrderObserver constructor.
     * @param HelperData $helper
     */
    public function __construct(
        HelperData $helper
    )
    {
        $this->helper = $helper;
    }

    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        if (!$this->helper->isEnabled())
            return;

        $this->helper->log(__('Log after create order'));
    }

}
