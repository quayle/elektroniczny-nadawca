<?php

namespace PocztaPolska\ElektronicznyNadawca;

class addShipmentResponse
{

    /**
     * @var addShipmentResponseItemType $retval
     */
    protected $retval = null;

    /**
     * @param addShipmentResponseItemType $retval
     */
    public function __construct($retval)
    {
      $this->retval = $retval;
    }

    /**
     * @return addShipmentResponseItemType
     */
    public function getRetval()
    {
      return $this->retval;
    }

    /**
     * @param addShipmentResponseItemType $retval
     * @return \PocztaPolska\ElektronicznyNadawca\addShipmentResponse
     */
    public function setRetval($retval)
    {
      $this->retval = $retval;
      return $this;
    }

}
