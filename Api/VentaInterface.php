<?php
 
namespace CesarOctavio\Api\Api;
 
interface VentaInterface
{
    /**
     * get test Api data.
     *
     * @api
     *
     * @param int $id
     *
     * @return \CesarOctavio\Api\Api\Data\VentaInterface
     */
    public function getVentaData($id);
}
