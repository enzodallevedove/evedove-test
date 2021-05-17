<?php

namespace Evedove\Test\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Data
 * @package Evedove\Test\Helper
 */
class Data extends AbstractHelper
{
    /**
     * @param $msg
     */
    public function log($msg)
    {
        $this->_logger->info($msg);
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return (bool)$this->getConfig('evedove_test/test_config/enabled');
    }

    /**
     * @param $configPath
     * @return mixed
     */
    public function getConfig($configPath)
    {
        return $this->scopeConfig->getValue(
            $configPath,
            ScopeInterface::SCOPE_STORE
        );
    }
}
