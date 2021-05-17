<?php

namespace Evedove\Test\Cron\Test;

use Evedove\Test\Helper\Data as HelperData;

/**
 * Class Log
 * @package Evedove\Test\Observer\Test
 */
class Log
{
    /**
     * @var HelperData
     */
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
}
