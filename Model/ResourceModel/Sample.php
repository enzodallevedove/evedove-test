<?php

namespace Evedove\Test\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;

/**
 * Class Sample
 * @package Evedove\Test\Model\ResourceModel
 */
class Sample extends AbstractDb
{
    /**
     * Sample constructor.
     * @param Context $context
     */
    public function __construct(
        Context $context
    )
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('sample_table', 'entity_id');
    }
}
