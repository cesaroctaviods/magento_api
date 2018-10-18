<?php

namespace CesarOctavio\TroquerApi\Model;

/**
 * CesarOctavio Venta Model.
 *
 */
class Venta  implements \CesarOctavio\TroquerApi\Api\Data\VentaInterface
{
    /**
     * Get ID.
     *
     * @return int
     */
    public function getId()
    {
        return 10;
    }

    /**
     * Set ID.
     *
     * @param int $id
     *
     * @return \CesarOctavio\TroquerApi\Api\Data\VentaInterface
     */
    public function setId($id)
    {
    }

    /**
     * Get title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return 'this is test title';
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return \CesarOctavio\TroquerApi\Api\Data\VentaInterface
     */
    public function setTitle($title)
    {
    }

    /**
     * Get desc.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return 'this is test api description';
    }

    /**
     * Set Desc.
     *
     * @param string $desc
     *
     * @return \CesarOctavio\TroquerApi\Api\Data\VentaInterface
     */
    public function setDescription($desc)
    {
    }
}