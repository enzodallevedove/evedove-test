<?php

namespace Evedove\Test\Model\ResourceModel\Sample;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 * @package Evedove\Test\Model\ResourceModel\Sample
 */
class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'entity_id';
    /**
     * @var string
     */
    protected $_eventPrefix = 'evedove_test_sample_collection';
    /**
     * @var string
     */
    protected $_eventObject = 'sample_collection';

    /**
     *
     */
    protected function _construct()
    {
        $this->_init('Evedove\Test\Model\Sample', 'Evedove\Test\Model\ResourceModel\Sample');
    }
}
