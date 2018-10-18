<?php
 
namespace CesarOctavio\TroquerApi\Api;
 
interface VentaInterface
{
    /**
     * get test Api data.
     *
     * @api
     *
     * @param int $id
     *
     * @return \CesarOctavio\TroquerApi\Api\Data\VentaInterface
     */
    public function getVentas($id);


}
