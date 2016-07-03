<?php

namespace PocztaPolska\ElektronicznyNadawca;

class clearEnvelopeByGuidsResponse
{

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param errorType $error
     */
    public function __construct($error)
    {
      $this->error = $error;
    }

    /**
     * @return errorType
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param errorType $error
     * @return \PocztaPolska\ElektronicznyNadawca\clearEnvelopeByGuidsResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
