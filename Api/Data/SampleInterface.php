<?php

namespace Evedove\Test\Api\Data;

/**
 * Interface SampleInterface
 * @package Evedove\Test\Api\Data
 */
interface SampleInterface
{
    const ENTITY_ID = 'entity_id';
    const NOME = 'nome';
    const SOBRE_NOME = 'sobre_nome';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * @param $entityId
     * @return mixed
     */
    public function setEntityId($entityId);

    /**
     * @return mixed
     */
    public function getEntityId();

    /**
     * @param $nome
     * @return mixed
     */
    public function setNome($nome);

    /**
     * @return mixed
     */
    public function getNome();

    /**
     * @param $sobreNome
     * @return mixed
     */
    public function setSobreNome($sobreNome);

    /**
     * @return mixed
     */
    public function getSobreNome();

    /**
     * @param $createdAt
     * @return mixed
     */
    public function setCreatedAt($createdAt);

    /**
     * @return mixed
     */
    public function getCreatedAt();

    /**
     * @param $updatedAt
     * @return mixed
     */
    public function setUpdatedAt($updatedAt
    );

    /**
     * @return mixed
     */
    public function getUpdatedAt();
}
