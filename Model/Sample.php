<?php

namespace Evedove\Test\Model;

use Evedove\Test\Api\Data\SampleInterface;
use Magento\Framework\Model\AbstractModel;

/**
 * Class Sample
 * @package Evedove\Test\Model
 */
class Sample extends AbstractModel implements SampleInterface
{
    const CACHE_TAG = 'evedove_sample';

    /**
     * @return string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * @param $nome
     * @return mixed|void
     */
    public function setNome($nome)
    {
        $this->setData(self::NOME, $nome);
    }

    /**
     * @return array|mixed|null
     */
    public function getNome()
    {
        return $this->getData(self::NOME);
    }

    /**
     * @param $sobreNome
     * @return mixed|void
     */
    public function setSobreNome($sobreNome)
    {
        $this->setData(self::SOBRE_NOME, $sobreNome);
    }

    /**
     * @return array|mixed|null
     */
    public function getSobreNome()
    {
        return $this->getData(self::SOBRE_NOME);
    }

    /**
     * @param $createdAt
     * @return mixed|void
     */
    public function setCreatedAt($createdAt)
    {
        $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * @return array|mixed|null
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * @param $updatedAt
     * @return mixed|void
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->setData(self::UPDATED_AT, $updatedAt);
    }

    /**
     * @return array|mixed|null
     */
    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
    }

    protected function _construct()
    {
        $this->_init('Evedove\Test\Model\ResourceModel\Sample');
    }
}
