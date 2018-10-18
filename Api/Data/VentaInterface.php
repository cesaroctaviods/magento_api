<?php


namespace CesarOctavio\TroquerApi\Api\Data;

/**
 * Marketplace product interface.
 *
 * @api
 */
interface VentaInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ENTITY_ID = 'entity_id';

    const TITLE = 'title';

    const DESC = 'description';
    /**#@-*/

    /**
     * Get ID.
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set ID.
     *
     * @param int $id
     *
     * @return \CesarOctavio\TroquerApi\Api\Data\VentaInterface
     */
    public function setId($id);

    /**
     * Get title.
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return \CesarOctavio\TroquerApi\Api\Data\VentaInterface
     */
    public function setTitle($title);

    /**
     * Get desc.
     *
     * @return string|null
     */
    public function getDescription();

    /**
     * Set Desc.
     *
     * @param string $desc
     *
     * @return \CesarOctavio\TroquerApi\Api\Data\VentaInterface
     */
    public function setDescription($desc);
}