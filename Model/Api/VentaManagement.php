<?php
 
namespace CesarOctavio\Api\Model\Api;
 
class VentaManagement implements \CesarOctavio\Api\Api\VentaInterface
{
    const SEVERE_ERROR = 0;
    const SUCCESS = 1;
    const LOCAL_ERROR = 2;
 
    protected $_ventaFactory;
 
    public function __construct(
        \CesarOctavio\Api\Model\VentaFactory $ventaFactory
 
    ) {
        $this->_ventaFactory = $ventaFactory;
    }
 
    /**
     * get venta Api data.
     *
     * @api
     *
     * @param int $id
     *
     * @return \CesarOctavio\Api\Api\Data\VentaInterface
     */
    public function getVentaData($id)
    {
        try {
            $model = $this->_ventaFactory
                ->create();
 
            if (!$model->getId()) {
                throw new \Magento\Framework\Exception\LocalizedException(
                    __('no data found')
                );
            }
 
            return $model;
        } catch (\Magento\Framework\Exception\LocalizedException $e) {
            $returnArray['error'] = $e->getMessage();
            $returnArray['status'] = 0;
            $this->getJsonResponse(
                $returnArray
            );
        } catch (\Exception $e) {
            $this->createLog($e);
            $returnArray['error'] = __('unable to process request');
            $returnArray['status'] = 2;
            $this->getJsonResponse(
                $returnArray
            );
        }
    }
}

